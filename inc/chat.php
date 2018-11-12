<div id="chat_icon" class="chat_icon_enable"  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Chat</td></tr></table>')"></div>
        <script type="text/javascript">
            if (parent.document.getElementById('chatBox'))
            {
                $('chat_icon').addClass('chat_icon_disable');
                $('chat_icon').removeClass('chat_icon_enable');
                $('chat_icon').onclick = function() {
                    parent.document.location.href = 'index.php';
                };
                if (Browser.ie)
                    window.onmousewheel = document.onmousewheel = parent.wheel;
            }
            else
            {
                $('chat_icon').addClass('chat_icon_enable');
                $('chat_icon').removeClass('chat_icon_disable');
                $('chat_icon').onclick = function() {
                    document.location.href = 'main.php';
                };
            }
        </script>