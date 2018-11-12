/**
 * Send an ajax request to the server.
 * 
 * @param {jQuery} elem Element which called sendAjax. Normally a button with gets disabled and an overlaying spinner
 * @param {string} url Calling url
 * @param {mixed} data Data to send
 * @param {string} callbackDone If given called after successfully done the request
 * @param {string} callbackFail If given called when an error occured
 * @param {Object} option Optional settings like dataType or type
 * 
 * @returns null
 */
function sendAjax(elem, url, data, callbackDone, callbackFail, option)
{
    if (elem.hasClass('disabled')) {
        return false;
    }
    
    if (typeof option === 'undefined') {
        option = new Object();
    };

    var spinner        = jQuery('<img src="" id="spinner" class="spinner-img" />').css('position','absolute').hide().appendTo('body');
    var position       = jQuery(elem).offset();
    var spinnerVisible = (typeof option['spinnerVisible'] !== 'undefined' ? option['spinnerVisible'] : true);
    var enableAgain    = (typeof option['enableAgain'] !== 'undefined' ? option['enableAgain'] : true);

    data = data + '&a='  + new Date().getTime();
    data = data + '&sh=' + secureHash;

    jQuery.ajax({
        url      : url,
        data     : data,
        dataType : (typeof option['dataType'] !== 'undefined' ? option['dataType'] : ''),
        type     : (typeof option['type']     !== 'undefined' ? option['type']     : 'POST'),

        beforeSend: function(jqXHR) {
            if (spinnerVisible) {
                jQuery('#spinner').css({'z-index': 999, top: position.top , left: position.left + jQuery(elem).width() / 2 - spinner.width() / 2 }).fadeIn();
            }

            elem.addClass('disabled');
        }
    }).done(function(data) {
        if(callbackDone !== undefined && typeof callbackDone === 'function') {
            callbackDone(data, elem);
        }
    }).fail(function(jqXHR, textStatus, errorThrown) {
        if(callbackFail !== undefined && typeof callbackFail === 'function') {
            callbackFail(elem, jqXHR, textStatus, errorThrown);
        }
    }).always(function() {
        if (spinnerVisible) {
            jQuery('#spinner').fadeOut();
        }
        
        if (enableAgain) {
            elem.removeClass('disabled');
        }
    });
		alert("ajax");
}

function sendRequest(method, url, data, showSpinnerId, spinnerClass, spinnerImage, spinnerContent)
{
    data = data + '&a='+ new Date().getTime();
    data = data + '&sh=' + secureHash;

    if (typeof showSpinnerId != 'undefined')
    {
        var showSpinnerObject = $(showSpinnerId);
        if (showSpinnerObject != null)
        {
            var spinnerImageObject = new Object();
            var spinnerContentObject = new Object();
            if (typeof spinnerImage != 'undefined')
                spinnerImageObject['class'] = spinnerImage;
            if (typeof spinnerContent != 'undefined')
                spinnerContentObject['class'] = spinnerContent;

            if (typeof spinnerClass != 'undefined')
                var loadingSpinner = new Spinner(showSpinnerId, {'class': spinnerClass, img: spinnerImageObject, content: spinnerContentObject});
            else
                var loadingSpinner = new Spinner(showSpinnerId, {img: spinnerImageObject, content: spinnerContentObject});
            var req = new Request({
                method: method,
                url: url,
                data: data,
                onRequest: loadingSpinner.show(),
                onComplete: function(response) {
                    loadingSpinner.hide();
                    eval(response);
                },
                onFailure: function(xhr)
                {
                    if (typeof HostApp != 'undefined')
                        HostApp.ShowNoConnectionScreen();
                }
            }).send();
        }
    }
    else
    {
        var req = new Request({
            method: method,
            url: url,
            data: data,
            onComplete: function(response)
            {
                eval(response);
            },
            onFailure: function(xhr)
            {
                if (typeof HostApp != 'undefined')
                    HostApp.ShowNoConnectionScreen();
            }
        }).send();
    }
}