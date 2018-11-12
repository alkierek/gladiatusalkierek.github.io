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

                <div id="footer">
                    <div id="footer_background" class="pngfix"></div>
                    <div id="footer_inner">
                        <div id="footer_logos">
                            <p id="safeplay"><a href="" target="_blank"></a></p>
                                                        <p id="logoGameforge"><a href="" target="_blank">Gameforge</a></p>
                        </div>
                        <div class="footer_links">
                            <a href="" target="_blank"><?php echo $index26; ?></a>&nbsp;|&nbsp;
                            <a href="" target="_blank">T & C</a>&nbsp;|&nbsp;
                            <a href="" target="_blank"><?php echo $index28; ?></a>&nbsp;|&nbsp;                                                        
                            <a target="_blank" href=""><?php echo $serverVERSION; ?></a>
                        </div>                            
                        <p id="copyright">© 2007 <a href="http://" target="_blank" class="copyright"></a>. <?php echo $index29; ?>.</p>
                    </div>
                </div>
            </div>
            
<script type="text/javascript" src="http://pixelzirkus.gameforge.com/functions.js"></script>
<script type="text/javascript">
setPixel ({
'location':'VISIT',
'product':'gladiatus',
'language':'ar',
'server-id':'1'
});
</script>        </div>
        
        <div id="tooltips"><script type="text/javascript" src="8501/js/tooltips2.js"></script></div>
        <script type="text/javascript">
            var secureHash = 'd41d8cd98f00b204e9800998ecf8427e';
            var _translations = {
                recipe: 'Pergaminos',
                white: 'Blanco',
                green: 'Verde',
                blue: 'Azul',
                purple: 'Lila',
                orange: 'Naranja',
                red: 'Rojo'
            }
        </script>
                <script type="text/javascript">
        var currentMousePos = { x: -1, y: -1 };
        
        jQuery(function() {
            jQuery("#draggable").draggable().resizable();
            jQuery(document).mousemove(function(event) {
                currentMousePos.x = event.pageX;
                currentMousePos.y = event.pageY;
            });
        });
        </script>
    </body>