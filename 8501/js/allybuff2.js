var shoparray = new Array();

function my_PickFunc() {
	pickObj.x = dd.obj.x;
	pickObj.y = dd.obj.y;
	pickObj.id = dd.obj.id;

	SetToolTip(false);

	SwapBlockingfields(true, dd.obj);

	PICK_ITEM = true;
}

function my_DropFunc() {
	for(var i=0; i < aElts.length;i++) {
		if(isDropTarget(aElts[i], dd.obj))
		{
			var test = aElts[i].id;
			var tmp = test.split('_');
			var type = tmp[0].substr(1);

			var test2 = dd.obj.id;
			var tmp2 = test2.split('_');
			var typeDD = tmp2[0].substr(1);

			if(type == 8)
			{
				dd.obj.moveTo(pickObj.x, pickObj.y);
				SwapBlockingfields(false);
				changeShow();
				SetToolTip(true);
				PICK_ITEM = false;

				if(dd.obj.contenttype == 8192)
				{
					//Verbrauchen
					dd.elements[dd.obj.name].hide();
				 	aElts[i].div.style.cursor = 'wait';
				 	changeDraggable(false);
					dd.obj.moveTo(pickObj.x, pickObj.y);
					sendRequest('get', 'ajax.php', 'mod=overview&submod=useItem&item='+ dd.obj.id);
				}
				return;
			}

			//Enchanten
			if(checkEnchant(dd.obj, aElts[i],type)) return;

			//Ins Inventar
			if(type >= 512)
			{
				if(typeDD < 512) continue;

				x = parseInt(tmp[1])-1;
				y = parseInt(tmp[2])-1;
				field = CalcFieldWithObj(dd.obj, type, maxcols, maxrows);
				if(!(field[x][y] & dd.obj.contentsize)) continue;
			}

			if(!(aElts[i].contenttypeaccept & dd.obj.contenttype)) continue;

			my_SwapContent (aElts[i],dd.obj);
			newXY(aElts[i]);
			newXY(dd.obj);

			aElts[i].maximizeZ();
			//aElts[i].div.style.zindex = 200;

			sendRequest('get', 'ajax/inventoryswap.php', 'old='+ dd.obj.id +'&new='+aElts[i].id);
			tt_Init(1);
			break;
		}
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