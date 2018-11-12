                <div id="content">
                                <script type="text/javascript" src="8501/js/dungeon.js"></script>
        <div class="contentItem">
        <h3>
            <span class="dungeon_header_open">En la huida</span><span>Abierto hasta&nbsp;21.04.2015 11:24 Reloj</span>
        </h3>
        <div class="contentItem_content">
            Puntos de calabozo 4 / 12                    </div>
    </div>
    <br class="clearfloat" />
    <div style="margin:1px">
                    <script type="text/javascript">
            function showWait()
            {
                var i, objs;
                
                if (document.styleSheets[0].imports) {
                    document.styleSheets[0].addRule('*', 'cursor:wait');
                } else {
                    document.styleSheets[0].insertRule('* {cursor:wait}', document.styleSheets[0].cssRules.length);
                }
                
                objs=document.getElementsByTagName('div');
                
                for (i=0; i<objs.length; i++) {
                    objs[i].style.cursor='wait';
                }
                
                objs=document.getElementsByTagName('area');
                
                for (i=0; i<objs.length; i++) {
                    objs[i].style.cursor='wait';
                }
            }
            </script>
            <div style="position:relative;width:532px;height:400px">
                <img src="8501/img/dungeons/23.jpg" usemap="#city" width="532" height="400" style="border:none;" />
                                                    <img src="8501/img/dungeons/slices/23_4.jpg" style="position:absolute;left:210px;top:192px" />
                                    <img src="8501/img/dungeons/slices/23_5.jpg" style="position:absolute;left:385px;top:143px" />
                                    <img src="8501/img/dungeons/slices/23_6.jpg" style="position:absolute;left:371px;top:64px" />
                                                                    <map name="dmap">
                                                    <area shape="poly" href="#" coords="210, 192, 280, 192, 280, 260, 210, 260" onClick="startFight('4', '118382');showWait();return false;" style="cursor:pointer;"></area>                                                    <area shape="poly" href="#" coords="385, 143, 444, 143, 444, 205, 385, 205" onClick="startFight('5', '118382');showWait();return false;" style="cursor:pointer;"></area>                                                    <area shape="poly" href="#" coords="371, 64, 432, 64, 432, 127, 371, 127" onClick="startFight('6', '118382');showWait();return false;" style="cursor:pointer;"></area>                                            </map>
                    <img usemap="#dmap" src="8501/img/spacer.gif" width="532" height="400" style="position:absolute;left:0px;top:0px;border:none" />
                                                    <img onClick="startFight('4', '118382');showWait();return false;" src="8501/img/combatloc.gif" style="cursor:pointer;width:16px;height:16px;position:absolute;left:269px;top:204px"  onClick="startFight('4', '118382');showWait();return false;"/>                                    <img onClick="startFight('5', '118382');showWait();return false;" src="8501/img/combatloc.gif" style="cursor:pointer;width:16px;height:16px;position:absolute;left:430px;top:185px"  onClick="startFight('5', '118382');showWait();return false;"/>                                    <img onClick="startFight('6', '118382');showWait();return false;" src="8501/img/combatloc.gif" style="cursor:pointer;width:16px;height:16px;position:absolute;left:413px;top:108px"  onClick="startFight('6', '118382');showWait();return false;"/>                                                                            <div class="map_label" style="cursor:pointer;left:289px;top:204px;"  onClick="startFight('4', '118382');showWait();return false;">5/5</div>                                            <div class="map_label" style="cursor:pointer;left:450px;top:185px;"  onClick="startFight('5', '118382');showWait();return false;">5/5</div>                                            <div class="map_label" style="cursor:pointer;left:433px;top:108px;"  onClick="startFight('6', '118382');showWait();return false;">6/6</div>                                                </div>
            </div>
                        <div class="contentItem" style="margin-top:10px">
            <h3>Misiones:</h3>
            <div class="contentItem_content">
                <div class="dungeoncondition_group ">El Senador se ha disfrazado y está intentando llegar al embarcadero sin ser visto</div>
                                                                        <div>
                                            <span class="dungeoncondition_label2">Ábrete paso entre los leales al delator, que pretenden detenerte.</span>
                                            <span class="dungeoncondition_fulfilled">Completado</span>
                                            &nbsp;
                                        </div>
                                                                            <br class="clearfloat" />
                                                                            <div>
                                            <span class="dungeoncondition_label2">Encuentra al senador antes de que llegue al barco contrabandista</span>
                                            <span class="dungeoncondition_not_fulfilled">No finalizado.</span>
                                            &nbsp;
                                        </div>
                                                                            <br class="clearfloat" />
                                                </div>
        </div>
        <div style="margin-top:10px;text-align:center">
            <form method="post" action="index.php?mod=dungeon&loc=1&action=cancelDungeon&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">
                <input type="hidden" name="dungeonId" value="118382" />
                <input class="button1" type="submit" value="Cancelar Mazmorra" />
            </form>
        </div>
    <script type='text/javascript'>var tickerArray = new Array();function pad(n, width, z) {
  z = z || "0";
  n = n + "";
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}function doTicker(){
                                    n=new Date();
                                    if (tickerArray.length > 0)
                                    {
                                        for (i = 0; i < tickerArray.length; i++)
                                        {
                                            if (isNaN(document.getElementById(tickerArray[i]["id"])))
                                            {
                                                var e = document.getElementById(tickerArray[i]["id"]);
                                                s = tickerArray[i]["sek"];
                                                seconds = tickerArray[i]["sek"];
                                                m = 0;
                                                h = 0;
                                                d = 0;
                                                if (s < 0)
                                                    e.innerHTML = "---";
                                                else
                                                {
                                                    var timeTXT = s + " s";
                                                    if (s > 59)
                                                    {
                                                        m = Math.ceil(s / 60);
                                                        s = s-m * 60;
                                                        timeTXT = m + " m";
                                                    }
                                                    if (m > 59)
                                                    {
                                                        h = Math.ceil(m / 60);
                                                        m = m - h * 60;
                                                        timeTXT = h + " h";
                                                    }
                                                    if (h > 24)
                                                    {
                                                        d = Math.ceil(h / 24);
                                                        h = h-d * 24;
                                                        timeTXT = d + " d";
                                                    }

                                                    e.innerHTML = timeTXT;
var numdays    = Math.floor(seconds / 86400);
var numhours   = pad(Math.floor((seconds % 86400) / 3600), 2);
var numminutes = pad(Math.floor(((seconds % 86400) % 3600) / 60), 2);
var numseconds = pad(((seconds % 86400) % 3600) % 60, 2);

e.innerHTML = (numdays ? numdays + " d " : "") + numhours + ":" + numminutes + ":" + numseconds + "";
                                                    tickerArray[i]["sek"]--;
                                                }
                                            }
                                        }
                                    window.setTimeout("doTicker();",999);
                                }
                            }doTicker();</script>                        </div>
                    </div>
                </div>
