var signupTimer = null;
var checkAllSignUpFields = false;

function equalHeights()
{
	var highest = 0;
    var elements = ["content", "sidebar"];

    elements.each(function(el, i)
    {
        var elemSize = $(el).getSize();
		var elemHeight = elemSize.y;
		if (elemHeight > highest) {
			highest = elemHeight;
		}
		$(el).set("min-height", highest + "px");
	});
}

window.addEvent('domready', function() {
    var loginNameOvertext = new OverText($('login_username'));
    var loginPasswordOvertext = new OverText($('login_password'));
    loginNameOvertext.startPolling();
    loginPasswordOvertext.startPolling();

    $('name').addEvent('keyup', startCheckSignupValues);
    $('email').addEvent('keyup', startCheckSignupValues);
    $('password').addEvent('keyup', startCheckSignupValues);
    $('tnc').addEvent('keyup', startCheckSignupValues);
    $('tnc').addEvent('mouseup', startCheckSignupValues);
    $('register_server').addEvent('change', startCheckSignupValues);

    var flashvars = false;
    var params = {wmode: 'transparent'};

    //swfobject.registerObject("header_animation", "9.0.0", pathToSWF + "expressInstall.swf");

    swfobject.embedSWF(pathToSWF + "header.swf", "header_animation", "1451", "175", "9.0.0", pathToSWF + "expressInstall.swf", flashvars, params);
    swfobject.embedSWF(pathToSWF + "flagpole_left.swf", "flagpole_left", "51", "143", "9.0.0", pathToSWF + "expressInstall.swf", flashvars, params);
    swfobject.embedSWF(pathToSWF + "flags_left.swf", "flags_left", "21", "37", "9.0.0", pathToSWF + "expressInstall.swf", flashvars, params);
    swfobject.embedSWF(pathToSWF + "torch_left.swf", "torch_left", "80", "153", "9.0.0", pathToSWF + "expressInstall.swf", flashvars, params);
    swfobject.embedSWF(pathToSWF + "flagpole_right.swf", "flagpole_right", "51", "145", "9.0.0", pathToSWF + "expressInstall.swf", flashvars, params);
    swfobject.embedSWF(pathToSWF + "flags_right.swf", "flags_right", "38", "38", "9.0.0", pathToSWF + "expressInstall.swf", flashvars, params);
    swfobject.embedSWF(pathToSWF + "torch_right.swf", "torch_right", "80", "156", "9.0.0", pathToSWF + "expressInstall.swf", flashvars, params);
    //swfobject.embedSWF(pathToSWF + "dust.swf", "dust_animation", "1408", "185", "9.0.0", pathToSWF + "expressInstall.swf", flashvars, params);

    $$('a.ceraBox').cerabox();
});

function startCheckSignupValues()
{
    if(signupTimer) {
        clearTimeout(signupTimer);
        signupTimer = null
    }

    signupTimer = setTimeout(function() {
        checkSignUpValues(false);
    }, 500);
}

function submitSignUpForm()
{
	$('signUpForm').action = 'http://' + $('register_server').value + '/game/index.php?mod=start&submod=signUp';
	$('signUpForm').submit();
}

function checkSignUpValues(submit)
{
	if (submit == true)
		checkAllSignUpFields = true;

	var postData = '&server=' + encodeURIComponent($('register_server').value)
		+ (checkAllSignUpFields == true || $('name').value != '' ? '&name=' + encodeURIComponent($('name').value) : '')
		+ (checkAllSignUpFields == true || $('email').value != '' ? '&email=' + encodeURIComponent($('email').value) : '')
		+ (checkAllSignUpFields == true || $('password').value != '' ? '&password=' + encodeURIComponent($('password').value) : '')
		+ (checkAllSignUpFields == true || $('fatherId').value != '' ? '&fatherId=' + encodeURIComponent($('fatherId').value) : '')
		+ (checkAllSignUpFields == true || $('fatherMessage').value != '' ? '&fatherMessage=' + encodeURIComponent($('fatherMessage').value) : '')
		+ (checkAllSignUpFields == true ? '&tnc=' + encodeURIComponent($('tnc').checked) : '')
		+ (submit == true ? '&submit=on' : '');
    sendRequest('post', 'ajax.php', 'mod=start&submod=checkSignupValues' + postData);
}

function submitLoginForm()
{
	if ($('login_server').value) {
		$('loginform').action = 'http://' + $('login_server').value;
    }
    
	$('loginform').submit();
}