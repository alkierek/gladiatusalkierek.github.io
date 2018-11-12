;(function($){

$.widget('gf.buff', {

    options: {
        width  : 38,
        height : 38,
        delay  : 1000,
        lang   : {},
        debug  : false
    },

    _init: function()
    {
            this._instance = $.gf.buff._counter != undefined
                    ? $.gf.buff._counter.length : 0;

            if ($.gf.buff._counter == undefined)
                $.gf.buff._counter = [];
            if ($.gf.buff._counter[this._instance] == undefined)
                $.gf.buff._counter[this._instance] = this._instance + 1;

            this._coords      = [this.options.width / 2, this.options.height / 2];
            this._radius      = Math.sqrt(Math.pow(this._coords[0], 2) + Math.pow(this._coords[1], 2));
            this._castStart   = parseInt(this.element.data('castStart'));
            this._effectStart = parseInt(this.element.data('effectStart'));
            this._effectEnd   = parseInt(this.element.data('effectEnd'));
            this._cooldownEnd = parseInt(this.element.data('cooldownEnd'));
            this._type        = this.element.data('buffType');
            this._name        = this.element.attr('title');
            this._canvas      = this.element.children('canvas').get(0);
            this._context     = this._canvas.getContext('2d');
            this._image       = this.element.data('image');
    },

    _runInterval: function()
    {
        if (this.options.debug) console.count('interval (' + $.gf.buff._counter[this._instance] + ') #');
        this.element.buff('update');
        this.element.parent().delay(this.options.delay, 'buffloop')
                   .queue('buffloop', $.proxy(this._runInterval, this))
                   .dequeue('buffloop');
    },

    startInterval: function()
    {
//        this.element.attr('title', this._name);
        this.element.attr('title', '');
        this._runInterval();
    },

    stopInterval: function()
    {
        this.element.parent().clearQueue('buffloop');
    },

    /**
     * Convert seconds to a countdown string
     *
     * @param   {Integer} seconds
     * @returns {String}
     */
    _secondsToCountdown: function(seconds)
    {
        var days = 0, hours = 0, minutes = 0, countdown = '';

        if (seconds >= 86400) {
            days    = Math.floor(seconds / 86400);
            seconds = seconds % 86400;
        }

        if (seconds >= 3600) {
            hours   = Math.floor(seconds / 3600);
            seconds = seconds % 3600;
        }

        if (seconds >= 60) {
            minutes = Math.floor(seconds / 60);
            seconds = seconds % 60;
        }

        if (days > 0) {
            countdown += days.toString() + ' ' + (this.options.lang[days !== 1 ? 'DAYS' : 'DAY']) + ' ';
        }

        countdown += (hours < 10 ? '0' : '') + hours
                  +  ':'
                  +  (minutes < 10 ? '0' : '') + minutes
                  +  ':'
                  +  (seconds < 10 ? '0' : '') + seconds;

        return countdown;
    },

    /**
     * Draw an arc
     *
     * @param   {Context} context
     * @param   {String}  color
     * @param   {Flaot}   end
     * @param   {Boolean} clockwise
     * @returns {void}
     */
    _drawArc: function(context, color, end, clockwise)
    {
        if (clockwise && end < 1 || !clockwise && end > 0) {
            context.fillStyle = color;

            if (clockwise && end > 0 || !clockwise && end < 1) {
                context.beginPath();
                context.moveTo(this._coords[0], this._coords[1]);
                context.arc(
                    this._coords[0],
                    this._coords[1],
                    this._radius,
                    Math.PI * (-0.5),
                    Math.PI * (-0.5 + 2 * end),
                    clockwise
                );
                context.lineTo(this._coords[0], this._coords[1]);
                context.closePath();

                context.fill();
            } else {
                context.fillRect(0, 0, this.options.width, this.options.height);
            }
        }
    },

    /**
     * Draw an arc
     *
     * @param   {Context} context
     * @param   {String}  color
     * @param   {Flaot}   end
     * @param   {Boolean} clockwise
     * @returns {void}
     */
    _drawOctagon: function(context, color)
    {
        //black border
        context.strokeStyle = 'rgba(0, 0, 0, 1)';
        context.beginPath();
        context.moveTo(11.5,  1.5);
        context.lineTo(25.5,  1.5);
        context.lineTo(36.5, 11.5);
        context.lineTo(36.5, 25.5);
        context.lineTo(25.5, 36.5);
        context.lineTo(11.5, 36.5);
        context.lineTo( 1.5, 25.5);
        context.lineTo( 1.5, 11.5);
        context.closePath();
        context.stroke();

        //colored border
        context.strokeStyle = color;
        context.beginPath();
        context.moveTo(11.5,  2.5);
        context.lineTo(25.5,  2.5);
        context.lineTo(35.5, 11.5);
        context.lineTo(35.5, 25.5);
        context.lineTo(25.5, 35.5);
        context.lineTo(11.5, 35.5);
        context.lineTo( 2.5, 25.5);
        context.lineTo( 2.5, 11.5);
        context.closePath();
        context.stroke();
    },

    _removeOuterOctagon: function(context)
    {
		// remove octagon outer content
        canvas      = this.element.children('canvas').get(0);
        context     = canvas.getContext('2d');
        context.save();
        context.globalCompositeOperation = 'destination-out';
        context.fillStyle                = 'rgba(0, 0, 0, 1)';
        context.beginPath();
        context.moveTo(-1.5, -1.5);
        context.lineTo(13.5, -1.5);
        context.lineTo(-1.5, 13.5);
        
        context.rect(-1.5, -1.5, 39.5, 2.5);
        
        context.moveTo(24.5, -1.5);
        context.lineTo(39.5, -1.5);
        context.lineTo(39.5, 13.5);

        context.moveTo(39.5, 24.5);
        context.lineTo(39.5, 39.5);
        context.lineTo(23.5, 39.5);
        
        context.rect(-1.5, 36.5, 39.5, 39.5);
        
        context.moveTo(13.5, 39.5);
        context.lineTo(-1.5, 39.5);
        context.lineTo(-1.5, 23.5);
        
        context.rect(-1.5, -1.5, 2.5, 35.5);
        
        context.closePath();
        context.fill();
        context.restore();
    },
    
    _tooltip: function(text)
    {
        $('#buffListToolTip').remove();
        var tt = $("<table id='buffListToolTip' cellspacing=2 cellpadding=2 valign=middle class='tooltipBox' style='position:absolute; left: " + currentMousePos.x + "px; top: " + currentMousePos.y + "px; z-index:1000;'></table>")
               .append($("<tr></tr>"))
               .append($("<td style='color:white; font-weight: bold; font-size:9pt' colspan='2' nowrap='nowrap'>" + text + "</td>"));
       
       $('body').append(tt);
    },
    
    update: function()
    {
        var total, current, image;
        this._context.globalCompositeOperation = 'source-over';
        
        if (this._cooldownEnd >= 0) {
            this._context.clearRect(0, 0, this.options.width, this.options.height);
            image                   = new Image();
            image.src               = this._image;
//            this._context.fillStyle = 'rgba(50, 60, 70, 1)';
//            this._context.fillStyle = 'rgba(115, 138, 160, 1)';
            this._context.fillStyle = 'rgba(201, 174, 121, 1)';
            this._context.rect(0, 0, 37, 37);
            this._context.fill();
            this._context.drawImage(image, 0, 0);

            if (this._castStart <= 0 && this._effectStart >= 0) {
                total   = (this._castStart * -1) + this._effectStart;
                current = (this._castStart * -1) / total;

//                this._drawArc(this._context, 'rgba(0, 0, 0, 0.5)', current, false);
                this._drawArc(this._context, 'rgba(220, 80, 80, 0.5)', current, false);

//                this.element.attr('title', this._name + ' - ' + this.options.lang['CAST_TIME'] + ' ' + this._secondsToCountdown(this._effectStart));
                this.element.attr('onmousemove', 'showBuffListTooltip("' + this._name + ' - ' + this.options.lang['CAST_TIME'] + ' ' + this._secondsToCountdown(this._effectStart) + '")');
                this.element.attr('onmouseout',  'hideBuffListTooltip()');
            } else if (this._effectEnd >= 0) {
                total   = (this._effectStart * -1) + this._effectEnd;
                current = (this._effectStart * -1) / total;

                this._drawArc(this._context, 'rgba(0, 0, 0, 0.5)', current, false);

//                this.element.attr('title', this._name + ' - ' + this._secondsToCountdown(this._effectEnd));
                this.element.attr('onmousemove', 'showBuffListTooltip("' + this._name + ' - ' + this._secondsToCountdown(this._effectEnd) + '")');
                this.element.attr('onmouseout',  'hideBuffListTooltip("' + this._name + ' - ' + this._secondsToCountdown(this._effectEnd) + '")');

                if (this._effectEnd === 0) {
                    PremiumSubject.activeElapsed(this._type);
                }
            } else {
                total   = (this._effectEnd * -1) + this._cooldownEnd;
                current = (this._effectEnd * -1) / total;

//                this._drawArc(this._context, 'rgba(0, 0, 0, 0.5)', current, true);
                this._drawArc(this._context, 'rgba(108, 147, 172, 0.5)', current, false);

//                this.element.attr('title', this._name + ' - ' + this.options.lang['COOLDOWN'] + ' ' + this._secondsToCountdown(this._cooldownEnd));
                this.element.attr('onmousemove', 'showBuffListTooltip("' + this._name + ' - ' + this.options.lang['COOLDOWN'] + ' ' + this._secondsToCountdown(this._cooldownEnd) + '")');
                this.element.attr('onmouseout',  'hideBuffListTooltip()');
            }

            this._removeOuterOctagon();
            this._drawOctagon(this._context, 'rgba(254, 192, 70, 1)');

            // Update the time data
            this._effectStart--;
            this._effectEnd--;
            this._cooldownEnd--;
        } else {
            PremiumSubject.cooldownElapsed(this._type);
            this.element.buff('destroy').remove();
        }
    },

    clone: function()
    {
        var el = this.element.clone(false);
        el.attr('title', this._name).buff(this.options);
        return el;
    },

    destroy: function()
    {
        this.element.attr('title', this._name);
        $.Widget.prototype.destroy.apply(this, arguments);
    }

});
})(jQuery);

/**
 * Premium subject
 *
 * Implements the observer pattern
 */
var PremiumSubject = {
    /**
     * Registered observers
     *
     * @property {Array}
     */
    observers: [],

    /**
     * Register an object as observer
     *
     * @param   {Object} observer
     * @returns {void}
     */
    registerObserver: function(observer)
    {
        PremiumSubject.observers.push(observer);
    },

    /**
     * Notify about an elapsed active item
     *
     * @param   {String} uuid
     * @returns {void}
     */
    activeElapsed: function(uuid)
    {
        for (var i = 0; i < PremiumSubject.observers; i++) {
            PremiumSubject.observers[i].activeElapsed(uuid);
        }
    },

    /**
     * Notify about an elapsed cooldown
     *
     * @param   {String} uuid
     * @returns {void}
     */
    cooldownElapsed: function(uuid)
    {
        for (var i = 0; i < PremiumSubject.observers; i++) {
            PremiumSubject.observers[i].cooldownElapsed(uuid);
        }
    }
}

function showBuffListTooltip(text)
{
    jQuery('#buffListToolTip').remove();
    var tt = jQuery("<table id='buffListToolTip' cellspacing=2 cellpadding=2 valign=middle class='tooltipBox' style='position:absolute; left: " + (currentMousePos.x + 10) + "px; top: " + (currentMousePos.y + 10) + "px; z-index:1000;'></table>")
           .append(jQuery("<tr></tr>"))
           .append(jQuery("<td style='color:white; font-weight: bold; font-size:9pt' colspan='2' nowrap='nowrap'>" + text + "</td>"));

   jQuery('body').append(tt);
}

function hideBuffListTooltip()
{
    jQuery('#buffListToolTip').remove();
}
