                <div id="content">
                                <script type="text/javascript" src="8501/js/dungeon.js"></script>
        <div class="contentItem">
        <h3>
            <span class="dungeon_header_open">El Fuerte del Dragón</span><span>Abierto hasta&nbsp;22.04.2015 07:29 Reloj</span>
        </h3>
        <div class="contentItem_content">
            Puntos de calabozo 6 / 12                    </div>
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
                <img src="8501/img/dungeons/2.jpg" usemap="#city" width="532" height="400" style="border:none;" />
                                                    <img src="8501/img/dungeons/slices/2_1.jpg" style="position:absolute;left:10px;top:243px" />
                                    <img src="8501/img/dungeons/slices/2_2.jpg" style="position:absolute;left:33px;top:85px" />
                                    <img src="8501/img/dungeons/slices/2_3.jpg" style="position:absolute;left:396px;top:167px" />
                                                                    <map name="dmap">
                                                    <area shape="poly" href="#" coords="10, 243, 104, 243, 104, 317, 10, 317" onClick="startFight('1', '118930');showWait();return false;" style="cursor:pointer;"></area>                                            </map>
                    <img usemap="#dmap" src="8501/img/spacer.gif" width="532" height="400" style="position:absolute;left:0px;top:0px;border:none" />
                                                    <img onClick="startFight('1', '118930');showWait();return false;" src="8501/img/combatloc.gif" style="cursor:pointer;width:16px;height:16px;position:absolute;left:63px;top:289px"  onClick="startFight('1', '118930');showWait();return false;"/>                                                                            <div class="map_label" style="cursor:pointer;left:83px;top:289px;"  onClick="startFight('1', '118930');showWait();return false;">2/2</div>                                                </div>
            </div>
                        <div class="contentItem" style="margin-top:10px">
            <h3>Misiones:</h3>
            <div class="contentItem_content">
                                    <div>
                        <span class="dungeoncondition_label">Lucha a través de las cavernas</span>
                        <span class="dungeoncondition_not_fulfilled">No finalizado.</span>
                        &nbsp;
                    </div>
                    <br class="clearfloat" />
                                    <div class="table_border_top">
                        <span class="dungeoncondition_label">Bajá la palanca y desarma la trampa</span>
                        <span class="dungeoncondition_not_fulfilled">No finalizado.</span>
                        &nbsp;
                    </div>
                    <br class="clearfloat" />
                                    <div class="table_border_top">
                        <span class="dungeoncondition_label">Mostralé a Barakun que lo podes derrotar</span>
                        <span class="dungeoncondition_not_fulfilled">No finalizado.</span>
                        &nbsp;
                    </div>
                    <br class="clearfloat" />
                            </div>
        </div>
        <div style="margin-top:10px;text-align:center">
            <form method="post" action="index.php?mod=dungeon&loc=2&action=cancelDungeon&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">
                <input type="hidden" name="dungeonId" value="118930" />
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
