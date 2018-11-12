function onMouseHover(elementID, cssClassName)
{
	document.getElementById(elementID).className = cssClassName;
}

/**
 * Setzt den Focus auf das erste Element eines Forms (nicht disabled oder Hidden)
 * Der Focus wird nur gesetzt wenn der Focus auf Body ist.
 *
 * @param elementId
 * @param ignoreOtherFocus
 */
function setFocus(elementId, ignoreOtherFocus)
{
    if (!ignoreOtherFocus && document.activeElement.nodeName != document.body.nodeName)
    {
        return;
    }

    var focusElement = $(elementId);
    if (focusElement.get('tag') != 'form')
    {
        focusElement.focus();
        return;
    }


    if (focusElement.elements[0] != null)
    {
        for (var i = 0; i < focusElement.length; i++)
        {
            if ( focusElement.elements[i].type != "hidden"
                && !focusElement.elements[i].disabled
                && !focusElement.elements[i].readOnly
            ) {
                focusElement.elements[i].focus();
                break;
            }
        }
    }
}

function addCharCounter(srcElementId, targetElementId)
{
	var updateFunc = updateCharCounter.pass([srcElementId, targetElementId]);
	$(srcElementId).addEvent('keyup', updateFunc);
	Function.attempt(updateFunc);
}

function updateCharCounter(srcElementId, targetElementId)
{
	$(targetElementId).set('text', $(srcElementId).value.length);
}

var SlideElementToggle = new Class({

    slideElement: null,
    slideElementId: null,
    toggleElementId: null,
    toggleClassesArray: null,

    initialize: function(slideElementId, toggleElementId)
    {
        this.toggleClassesArray = new Array();
        this.slideElementId = slideElementId;
        this.toggleElementId = toggleElementId;
        this.slideElement = new Fx.Slide(this.slideElementId);
        var self = this;
        $(this.toggleElementId).addEvent('click', function(){
            self.toggleAllClasses(self.slideElement.open);
            self.slideElement.toggle();
        });
        this.slideElement.hide();
    },

    addToggleClass: function (toggleElementId, classOpen, classClosed)
    {
        var self = this;
        self.toggleClassesArray.push(new Array(toggleElementId, classOpen, classClosed));
        this.toggleAllClassesToClosed();
    },
    
    toggleAllClasses: function (isOpen)
    {
        var self = this;
        for (var i = 0; i < self.toggleClassesArray.length; i++)
        {
            var toggleElementId = self.toggleClassesArray[i][0];
            var classOpen = self.toggleClassesArray[i][1];
            var classClosed = self.toggleClassesArray[i][2];
            if (isOpen)
            {
                $(toggleElementId).removeClass(classOpen);
                $(toggleElementId).addClass(classClosed);
            }
            else
            {
                $(toggleElementId).removeClass(classClosed);
                $(toggleElementId).addClass(classOpen);
            }
        }
    },

    toggleAllClassesToClosed: function()
    {
        this.toggleAllClasses(true);
    },

    toggleAllClassesToOpen: function()
    {
        this.toggleAllClasses(false);
    },

    show: function()
    {
        this.slideElement.show();
        this.toggleAllClassesToOpen();
    },

    hide: function()
    {
        this.slideElement.hide();
        this.toggleAllClassesToClosed();
    }
});

function toggleCostume(setId, partsToToggle1, partsToToggle2, show)
{
    partsToToggle1 = JSON.decode(partsToToggle1);
    partsToToggle2 = JSON.decode(partsToToggle2);

    var toggle = function(setId, parts, show, isSpecial)
    {
        for (var i = 0; i < parts.length; i++)
        {
            partId = 'costumeSet_' + setId + '_' + (isSpecial ? 's' : '') + parts[i];
            $(partId).style.visibility = (show ? 'visible' : 'hidden');
        }
    };
    toggle(setId, partsToToggle1, show, false);
    toggle(setId, partsToToggle2, !show, true);
}

(function($){
    var EyecatcherGlow = {
        
        init: function() {
            setInterval(function(){
                $(".eyecatcher").addClass("eyecatcher-glow").delay(550).queue(function(next){
                    $(this).removeClass("eyecatcher-glow"); 
                    next();
                });
            },
            3500);
            setInterval(function(){
                $(".eyecatcher-strong").addClass("eyecatcher-glow-strong").delay(1100).queue(function(next){
                    $(this).removeClass("eyecatcher-glow-strong"); 
                    next();
                });
            },
            3500);
        }
    }
    
    $(function(){
        EyecatcherGlow.init();
        $(".meter > span").each(function() {
            $(this)
                .data("origWidth", $(this).width())
                .width(0)
                .animate({
                    width: $(this).data("origWidth")
                }, 1200);
        });
    });
    
    
})(jQuery);