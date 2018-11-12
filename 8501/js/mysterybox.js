var MysteryBox = new Class(
{
    // Default Values (init)
    configTotalMs : 0,
    configStepMs : 0,
    configStepPixel : 0,
    configTop : 0,
    configItemHeight : 0,

    // Html
    buttonId : 'startStop',
    buttonUrl : null,
    buttonCaptionStart: 'start',
    buttonCaptionStop: 'stop',
    boxIdPrefix : 'box',
    rewardPopupFunction : null,
    containerId : 'mysterybox_wheel',
    progressBarId : 'mysterybox_progress',
    progressBarFillId : 'mysterybox_progress_fill',
    progressBarVisible: false,
    rewardIdPrefix: 'reward_pool_',

    // Current Values
    stepMs : 0,
    stepPixel : 0,
    top : 0,
    boxOld : 2,

    stopped : false,
    rotating : false,
    picked : 0,
    rewardPosi : 0,
    rewardDivi : 0,
    error : false,
    request : false,

    initialize: function(
        totalMs, stepMs, stepPixel, top, itemHeight, buttonId, buttonUrl,
        boxIdPrefix, buttonCaptionStart, buttonCaptionStop, containerId,
        progressBarId, progressBarFillId, rewardIdPrefix,
        rewardPopupFunction
    ) {
        this.configTotalMs = totalMs;
        this.configStepMs = stepMs;
        this.configStepPixel = stepPixel;
        this.configTop = top;
        this.configItemHeight = itemHeight;
        this.buttonId = buttonId;
        this.buttonUrl = buttonUrl;
        this.boxIdPrefix = boxIdPrefix;
        this.buttonCaptionStart = buttonCaptionStart;
        this.buttonCaptionStop = buttonCaptionStop;
        this.containerId = containerId;
        this.progressBarId = progressBarId;
        this.progressBarFillIdId = progressBarFillId;
        this.rewardIdPrefix = rewardIdPrefix;
        this.rewardPopupFunction = rewardPopupFunction;

        this.attachEventStart();
    },

    attachEventStart: function()
    {
        var self = this;
        $(this.buttonId).addEvent('click', function(event) {
            event.stop();
            self.startWheel();
        });
        $(this.buttonId).value = this.buttonCaptionStart;
    },

    attachEventStop: function()
    {
        var self = this;
        $(this.buttonId).addEvent('click', function(event) {
            event.stop();
            self.stopWheel();
        });
        $(this.buttonId).value = this.buttonCaptionStop;
    },

    detachEvent: function()
    {
        var button = $(this.buttonId);
        button.removeEvent('click');
        button.disabled = 'disabled';
        button.addClass('disabled');
    },

    startWheel: function()
    {
        // wheel still rotating
        if (this.rotating)
            return;

        this.attachEventStop();
        this.stepMs = this.configStepMs;
        this.stepPixel = this.configStepPixel;
        this.top = this.configTop;
        this.stopped = false;
        this.rotating = true;
        this.rewardPosi = 0;
        this.rewardDivi = 0;
        this.moveWheel(0, (this.configTop + this.configItemHeight), (this.configTop * 2) + this.configItemHeight);
    },

    moveWheel: function(currentMs, top1, top2)
    {
        if (this.error)
        {
            this.redirect();
            return;
        }

        // wheel stopped or not able to move
        if (this.stepPixel <= 0 || (this.stopped && this.rewardPosi >= 0))
        {
            return;
        }

        // stop wheel (automatic)
        if (!this.stopped && currentMs >= this.configTotalMs && !this.request)
        {
            this.stopWheel();
        }

        // braking
        if (this.stopped)
        {
            // calculate speed (pixel to move)
            this.stepPixel = Math.max(5, Math.ceil(this.rewardPosi / this.rewardDivi));

            // move to correct position
            this.rewardPosi += this.stepPixel;
            if (this.rewardPosi >= 0)
            {
                this.rotating = false;
                this.stepPixel -= this.rewardPosi;
                this.rewardPosi = 0;
                if (this.picked > 0)
                    this.rewardPopupFunction(this.rewardIdPrefix + this.picked);
                else
                {
                    this.redirect();
                    return;
                }
            }
        }

        // move wheel
        top1 += this.stepPixel;
        top2 += this.stepPixel;

        // switch content
        if (this.boxOld == 2 && (top1 >= this.configItemHeight))
        {
            this.boxOld = 1;
            top1 = top2 + this.top;
        }
        else if (this.boxOld == 1 && (top2 >= this.configItemHeight))
        {
            this.boxOld = 2;
            top2 = top1 + this.top;
        }

        // update positions
        $(this.boxIdPrefix + '1').style.top = top1 + 'px';
        $(this.boxIdPrefix + '2').style.top = top2 + 'px';

        currentMs += this.stepMs;
        this.setProgress(currentMs);
        this.moveWheel.delay(this.stepMs, this, [currentMs, top1, top2]);
    },

    stopWheel: function()
    {
        this.detachEvent();
        var self = this;
        self.request = true;
        var req = new Request({
            method: 'get',
            url: self.buttonUrl + '&a='+ new Date().getTime(),
            data: '',
            onSuccess: function(response)
            {
                if (!isNaN(response) && response > 0)
                {
                    var minBrake = self.configItemHeight * 3;
                    self.picked = response;
                    var posiOld = $(self.boxIdPrefix + self.boxOld + '_' + response).getPosition($(self.containerId));
                    var posiCurrent = $(self.boxIdPrefix + (self.boxOld == 2 ? 1 : 2) + '_' + response).getPosition($(self.containerId));

                    if (posiCurrent['y'] < 0 && Math.abs(posiCurrent['y']) > minBrake)
                    {
                        self.rewardPosi = posiCurrent['y'];
                    }
                    else
                    {
                        self.rewardPosi = posiOld['y'];
                    }

                    self.rewardDivi = (self.rewardPosi / self.stepPixel);
                    self.stopped = true;
                }
                else
                {
                    self.error = true;
                }
            },
            onFailure: function()
            {
                self.error = true;
            }

        }).send();
    },

    redirect: function()
    {
        window.location.href = document.location.href;
    },

    setProgress: function(currentMs)
    {
        var percent = parseInt((100 / this.configTotalMs) * currentMs);
        if (percent <= 100 && !this.stopped)
        {
            $(this.progressBarFillIdId).setStyle('width', percent + '%');
        }

        if (this.stopped && this.progressBarVisible)
        {
            this.progressBarVisible = false;
            $(this.progressBarId).setStyle('visibility', 'hidden');
        }
        else if (!this.stopped && !this.progressBarVisible)
        {
            this.progressBarVisible = true;
            $(this.progressBarId).setStyle('visibility', 'visible');
        }
    }
});