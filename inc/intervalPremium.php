            <script type="text/javascript">
        //<![CDATA[

        lang = new Array();
        lang['DAY']       = 'Día';
        lang['DAYS']      = 'Días';
        lang['COOLDOWN']  = 'PREMIUM_COOLDOWN';
        lang['CAST_TIME'] = 'CAST_TIME';

        var translations = {
            'getPremiumCurrency':          'BUYING',
            'getPremiumCurrencyTooltip':   'PREMIUM_BUY_PREMIUM_POINTS_TOOLTIP',
            'extendedDescriptionShow':     'PREMIUM_EXTENDED_DESCRIPTION_SHOW',
            'extendedDescriptionClose':    'PREMIUM_EXTENDED_DESCRIPTION_CLOSE',
            'buy':                         'PREMIUM_ITEM_BUY',
            'activate':                    'PREMIUM_ITEM_ACTIVATE',
            'buyInProgress':               'PREMIUM_BUY_IN_PROGRESS',
            'insufficientStock':           'PREMIUM_INSUFFICIENT_STOCK',
            'insufficientBalance':         'PREMIUM_INSUFFICIENT_BALANCE',
            'notBuyable':                  'PREMIUM_ITEM_NOT_BUYABLE',
            'itemIsActive':                'PREMIUM_ITEM_IS_ACTIVE',
            'itemIsCoolingDown':           'PREMIUM_ITEM_IS_COOLING_DOWN',
            'secondsSuffix':               'SECONDS_SUFFIX',
            'minutesSuffix':               'MINUTES_SUFFIX',
            'hoursSuffix':                 'HOURS_SUFFIX',
            'daysSuffix':                  'DAYS_SUFFIX',
            'price':                       'PREMIUM_PRICE',
            'inventory':                   'PREMIUM_INVENTORY',
            'duration':                    'PREMIUM_DURATION',
            'cooldown':                    'PREMIUM_COOLDOWN',
            'buyError':                    'PREMIUM_BUY_ERROR',
            'save':                        'SAVE',
            'currencyBought':              'CURRENCY_BOUGHT',
            'currencyFree':                'CURRENCY_FREE',
            'localAvailable':              'ONLY_ON_THIS_WORLD_AVAILABLE',
            'globalAvailable':             'ON_ANY_WORLD_AVAILABLE',
            'buySuccessful':               'PREMIUM_BUY_SUCCESSFUL',
            'buySuccessfulActivationHint': 'PREMIUM_BUY_SUCCESSFUL_ACTIVATION_HINT',
            'doNotShowHintAgain':          'DO_NOT_SHOW_HINT_AGAIN',
            'pack':                        'PACK',
            'specialOffer':                'SPECIAL_OFFER',
            'invalidInput':                'ERROR_029'
        };
        //]]>
    </script>
            <script type="text/javascript" src="8501/js/zorn2.js"></script>
        <script type="text/javascript">
            var secureHash    = 'acc8a7e22ab9cb4e2fb94e2f55f05660';
            var alertFallback = false;

            if (typeof console === "undefined" || typeof console.log === "undefined") {
                console = {};

                if (alertFallback) {
                    console.log = function(msg) {
                        alert(msg);
                    };
                } else {
                    console.log = function() {};
                }
            }
            
            
            // Return $ back to mootools
            $.noConflict();
            (function($){
                $(document).ready(function() {
                    $('.buff-container').bind('click', function(event)
                    {
                        var $target = $(event.target);
                        if ($target.is('canvas')) {
                            $target = $target.parent('div.buff');
                        }

                        if ($target.hasClass('buff-clickable')) {
    //                        console.log($target, $target.data('link'));
                            window.location.href = $target.data('link');
                        }
                    });

                    $('.buff-many-opener').bind('click', function(event) {
                        var $layer = $('<div>').attr('title', 'Bonificaciones activas').layer({
                            position : { of: '#mainnav' },
                            autoOpen : true,
                            modal    : true
                        }).bind('layerclose', function() {
                            $(this).children().unbind('remove');
                            $(this).unbind('remove').remove();
                        }).appendTo('body');

                        var $buffList = $(document.createElement('div')).addClass('buff-container');
                        $(this).prev().children().each(function(i, buff)
                        {
                            if (buff.hasClass('buff')) {
                                $(buff).buff('clone').appendTo($buffList);
                            }
                        });

                        $buffList.addClass('clearfix').css({
                            width: '205px',
                            marginLeft: '-2px'
                        }).appendTo($layer.find('.gf-layer-description'));
                        $buffList.find('.buff').buff('startInterval');
                    });
                });
            })(jQuery);
            
            // Load stuff after initialize startup scripts like excanvas
            jQuery(window).bind('load', function(){
                jQuery('.buff').buff({
                    width  : 38,
                    height : 38,
                    lang   : lang
                }).buff('startInterval');
            });
        </script>
