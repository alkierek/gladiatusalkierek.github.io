function getStyleValueById(id,property1,property2)
{
	//beispiel property1 = font-size, property2 = fontSize
	var element = document.getElementById(id);
	var eigenschaftswert;
	if (window.getComputedStyle) {
		var styledeclaration = window.getComputedStyle(element, null);
		eigenschaftswert = styledeclaration.getPropertyValue(property1);
	} else if (element.currentStyle) {
		eigenschaftswert = eval('element.currentStyle.'+property2);
	}
	return eigenschaftswert;
}


function showDescription(rune,nr)
{
	for(i =1 ; i <= 5; i++)
	{
		document.getElementById('description'+rune+'_'+i).style.display = 'none';
	}
	if (document.getElementById('button'+rune+'_'+nr).style.display != 'none')
	{
		document.getElementById('description'+rune+'_'+nr).style.display = 'block';
	}
}

function showPowerUpTitle(title,powerup,value)
{
	document.getElementById('hiddenPowerUp'+powerup+'Nr').value = value;
	document.getElementById('runeTitle'+powerup).innerHTML = title;
}

function goToRunes()
{
	document.location.href = "index.php?mod=powerups";
}

function objektAusgrauen(state,divID,isRuneImg, hasOnClick)
{

	if(state)
	{
		if(document.getElementById(divID + "_grau"))
		{
			document.getElementById(divID + "_grau").setAttribute("onmouseover","return escape();");
			document.getElementById(divID + "_grau").onmouseover = function() {return escape();};
		}
		else
		{
			var div = document.createElement("div");
			div.id = divID + "_grau";
			div.className = "rune_grey";
			div.style.width = getStyleValueById(divID, "width", "width"); //document.getElementById(divID).style.width;
			div.style.height = getStyleValueById(divID, "height", "height");//document.getElementById(divID).style.height;
			if (isRuneImg)
			{
				div.className = "runeImg_grey";
			}
			div.style.left = getStyleValueById(divID, "left", "left");//document.getElementById(divID).style.left;
			if (!isNaN(document.getElementById(divID).style.right))
			{
				div.style.right = getStyleValueById(divID, "right", "right");//document.getElementById(divID).style.left;
			}
			div.style.top = getStyleValueById(divID, "top", "top");//document.getElementById(divID).style.top;
			div.style.zIndex = getStyleValueById(divID, "z-index", "zIndex")+50;//document.getElementById(divID).style.zIndex+50;
			div.setAttribute("onmouseover",document.getElementById(divID).getAttribute("onmouseover"));
			if (hasOnClick)
			{
				div.setAttribute("onclick",document.getElementById(divID).getAttribute("onclick"));
				div.style.cursor = document.getElementById(divID).style.cursor;
			}
			document.getElementById(divID).parentNode.appendChild(div);
		}
	}
	else
	{
		if(isNaN(document.getElementById(divID + "_grau")))
		{
			document.getElementById(divID).parentNode.removeChild(document.getElementById(divID + "_grau"));
		}
		if (!hasOnClick)
		{
			//document.getElementById(divID).removeAttribute("onclick");
			document.getElementById(divID).setAttribute("onclick", "");
			//alert("TEST: "+divID+" "+document.getElementById(divID).getAttribute("onclick"));
			document.getElementById(divID).style.cursor = 'auto';
		}
	}
}

function showConfirm(rune, nr)
{
	var div = document.createElement("div");
	div.id = "breakDiv";
	div.className = "break_div";
	var width = document.documentElement.clientWidth;
	var height = document.documentElement.clientHeight;
	height = height - 300;
	div.style.width = width;
	//div.style.width = window.innerHeight;
	div.style.height = '1200px';
	div.style.zIndex = 500;
	document.body.appendChild(div);

	var left = (width - 400) /2;
	var top = height /2;
	//�berpr�fen ob Browser = IE6
	if (navigator.userAgent.indexOf("MSIE") >=0)
	{
		top += rune * 100;
	}

	document.getElementById('changeRune'+rune+'_'+nr).style.left = left+'px';
	document.getElementById('changeRune'+rune+'_'+nr).style.top = top+'px';
	document.getElementById('changeRune'+rune+'_'+nr).style.display='block';
	document.getElementById('changeRune'+rune+'_'+nr).style.zIndex = 501;
}

function cancel(rune, nr)
{
	document.body.removeChild(document.getElementById('breakDiv'));
	document.getElementById('changeRune'+rune+'_'+nr).style.zIndex = -1;
	document.getElementById('changeRune'+rune+'_'+nr).style.display= 'none';
}


function buyRune(powerUp, powerNr)
{
	document.getElementById('hiddenPowerUp'+powerUp+'Nr').value = powerNr;
	document.getElementById('buyForm'+powerUp).submit();
}