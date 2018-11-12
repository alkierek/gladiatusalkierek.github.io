var showPayment = false;

function hidePaymentSplash()
{
    showPayment = false;
	hideBreakDiv();
	var dialogDivId = 'paymentScreen';
	document.getElementById(dialogDivId).style.display = 'none';
	document.getElementById(dialogDivId).style.zIndex = -1;
	document.getElementById('iframe').src = '';
}

function showPaymentSplash()
{
    data = 'a=' + new Date().getTime();
    data = data + '&sh=' + secureHash;

    jQuery.ajax({
        url      : 'ajax/paymentGetLink.php',
        data     : data,
        type     : 'POST',
        async    : false
    }).done(function(data) {
        url = data;
    });

	if (showPayment) {
		hidePaymentSplash();
		return;
	} else {
		showBreakDiv();
		showPayment = true;
	}

	var dialogDivId = 'paymentScreen';

	var dialogDivObj=document.getElementById(dialogDivId);
	if (!dialogDivObj.parentNode.tagName.match(/^body$/i))
	{
		dialogDivObj.parentNode.removeChild(dialogDivObj);
		document.body.appendChild(dialogDivObj);
	}

	if (navigator.userAgent.indexOf('MSIE') >= 0) {
		var width  = document.documentElement.clientWidth;
	} else {
		var width  = window.innerWidth;
	}
	document.getElementById(dialogDivId).style.display = 'block';

    var off = document.getElementById(dialogDivId).offsetWidth;
	var left = Math.floor((width / 2) - (off / 2));
	var top = 30;
	document.getElementById(dialogDivId).style.left = left+'px';
	document.getElementById(dialogDivId).style.top = top+'px';
	document.getElementById(dialogDivId).style.zIndex = 501;
	document.getElementById('iframe').src = url;
}

function showBreakDiv()
{
	var div=document.createElement('div');
	div.id = 'breakDiv';
	div.className = 'break_div';
	div.onmousedown = function() {hidePaymentSplash();};
	div.style.zIndex = 500;
	div.style.overflow = 'hidden';
	if (navigator.userAgent.indexOf('MSIE 6.0') >= 0) {
		document.body.style.width='100%';
		document.body.style.height='100%';
		div.style.width=document.body.offsetWidth+'px';
		div.style.height=document.body.offsetHeight+'px';
	} else {
		div.style.position='fixed';
		div.style.width='100%';
		div.style.height='100%';
	}
	document.body.appendChild(div);
}

function hideBreakDiv()
{
	if (document.getElementById('breakDiv'))
		document.body.removeChild(document.getElementById('breakDiv'));
}