<?php
if ($anlvl == 1) {
    include ('blackoutdialog/levelup.php');
}
            ?>
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
'location':'SIGNUP',
'product':'gladiatus',
'language':'ve',
'server-id':'1',
'user-id':'<?php echo $userID; ?>',
'user-email':'<?php echo $userEMAIL; ?>',
'user-name':'<?php echo $userNAME; ?>'
});
</script>        </div>
        
        <div id="tooltips"><script type="text/javascript" src="8501/js/tooltips2.js"></script></div>
        <script type="text/javascript">
            var secureHash = 'acc8a7e22ab9cb4e2fb94e2f55f05660';
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
</html>