var plingX = 0;
var plingY = 0;

function my_PickFunc() {
	if(PICK_ITEM) my_DropFunc();
	pickObj.x = dd.obj.x;
	pickObj.y = dd.obj.y;
	pickObj.id = dd.obj.id;

	SetToolTip(false);
	SwapBlockingfields(true, dd.obj);
	PICK_ITEM = true;
}

function my_DropFunc() {

	for(var i=0; i < aElts.length;i++) {
		if(
			dd.obj.id != aElts[i].id &&
			dd.obj.x >= aElts[i].x-(aElts[i].w/2) &&
			dd.obj.x < aElts[i].x+(aElts[i].w/2)  &&
			dd.obj.y >= aElts[i].y-(aElts[i].h/2) &&
			dd.obj.y < aElts[i].y+(aElts[i].h/2) &&
			dd.obj.div.innerHTML
		) {
			var test = aElts[i].id;
			var tmp = test.split('_');
			var type = tmp[0].substr(1);

			//Enchanten
			if(checkEnchant(dd.obj, aElts[i],type)) return;

			//Ins Inventar
			if(type >= 512)
			{
				x = parseInt(tmp[1])-1; y = parseInt(tmp[2])-1;
				field = CalcFieldWithObj(dd.obj, type, maxcols, maxrows);
				if(!(field[x][y] & dd.obj.contentsize)) continue;
			}

			if(!(aElts[i].contenttypeaccept & dd.obj.contenttype)) continue;

			my_SwapContent (aElts[i],dd.obj);

			newXY(aElts[i]);
			newXY(dd.obj);

			aElts[i].maximizeZ();

			tt_Init(1);

			if(dd.obj.id.substr(0,6) == 'paket_')
			{
				plingX = aElts[i].x;
				plingY = aElts[i].y;
				aElts[i].div.innerHTML = "";
				sendRequest('get', 'ajax.php', 'pid=' + dd.obj.id.substr(6) +'&new='+aElts[i].id);
			}
			else
				sendRequest('get', 'ajax.php', 'old='+ dd.obj.id +'&new='+aElts[i].id);
			break;
		}
		window.location="packages.php?move";
	}
 	dd.obj.moveTo(pickObj.x, pickObj.y);
	SwapBlockingfields(false);
	changeShow();
	SetToolTip(true);
	PICK_ITEM = false;
}

function my_DragFunc()
{
	return;
}