                <div id="content">
                                <script type="text/javascript" src="8501/js/dungeon.js"></script>
    <div class="contentItem">
        <h3>Descripción</h3>
        <div class="contentItem_content">
            Escondido detras de un bosque hay un camino entre lso arboles. Una fresca briza de aire atraviesa a los transeuntes. La presencia de seres llenos de maldad destruye esperanzas y un silencio de muerte reina en la oscuridad.        </div>
    </div>
    <div class="contentItem">
        <h3>Entrá al calabozo</h3>
        <div class="contentItem_content" style="text-align:center">
                            <form method="post" action="index.php?mod=dungeon&loc=0&sh=acc8a7e22ab9cb4e2fb94e2f55f05660" style="display:inline">
                    <table align="center">
                        <tr>
                            <td style="text-align:center;vertical-align:top;padding:15px">
                                                                    <input class="button1" type="submit" name="dif1" value="Normal" />
                                                            </td>
                            <td style="text-align:center;vertical-align:top;padding:15px">
                                                                    <input class="button1 disabled" type="button" value="Avanzado" disabled="disabled" /><br />
                                                                                                </td>
                        </tr>
                    </table>
                </form>
                    </div>
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
