
<html>
    <head>
                    <link href="8501/css/chat.css" rel="stylesheet" type="text/css" media="screen" />
                <script type="text/javascript" src="8501/chat/mootools_core.js"></script>
        <script type="text/javascript" src="8501/chat/mootools_more.js"></script>
        <script type="text/javascript" src="8501/chat/chatConfig.js"></script>
        <script type="text/javascript" src="8501/chat/chat.js"></script>
        <script type="text/javascript" src="8501/chat/socket.io.js"></script>
        <script type="text/javascript" src="8501/chat/json2.js"></script>
        <script type="text/javascript">
            WEB_SOCKET_SWF_LOCATION = "8501/chat/WebSocketMain.swf";
        </script>
    </head>
    <body>
        <iframe src="overview.php" style="z-index:5;" width="100%" height="100%" marginheight="0" marginwidth="0" frameborder="0" name="mainFrame" id="mainFrame" onmouseover="$('playerMenue').fade('out');"></iframe>
        <div id="transparentHelper"></div>
        <div id="playerMenue"></div>
        <div id="chatBox" class="chatBoxHorizontalBig chatBoxVerticalSmall">
            <div id="chatTransparentBox"></div>
            <div id="chatMoveBar" class="chatHeaderBig"></div>
            <div id="chatButtonMinMaxHorizontal" class="chatButtonMinHorizontal" onClick="chat.minimizeHorizontal();"></div>
            <div id="chatButtonMinMaxVertical" class="chatButtonMaxVertical" onClick="chat.maximizeVertical();"></div>
            <div class="chatTab chatTabActive" id="tab_general" style="left: 10px;"><div class="chatTabLabel">Todo</div></div>
            <div class="chatTab chatTabActive" id="tab_guild" style="left: 105px;"><div class="chatTabLabel">Alianza</div></div>
            <div id="chatContent" class="chatContentHorizontalBig chatContentVerticalSmall"></div>
            <div id="chatFooter" class="chatFooterBig">
                <div id="chatButtonSelectChannel" onClick="swapChannelSelect()"></div>
                <div id="chatAktChannel" style="color:#999999">Provincia:</div>
                <div id="chatChannelBox">
                  <table>
                    <tr class="chatChannelBoxHeader" colspan="2"><th align="left">Canal</th></tr>
                    <tr class="chatChannelBoxItem" onClick="chat.selectChannel(chatConfig.cmdCommon, chatConfig.chanCommon);"><td>/p</td><td>Provincia</td></tr>
                    <tr class="chatChannelBoxItem" onClick="chat.selectChannel(chatConfig.cmdGuild, chatConfig.chanGuild);"><td>/g</td><td>Alianza</td></tr>
                    <tr class="chatChannelBoxItem" onClick="chat.selectChannel(chatConfig.cmdReturn, chatConfig.chanWhisper);"><td>/r</td><td>Responder</td></tr>
                    <tr class="chatChannelBoxHeader" colspan="2"><th align="left">Orden</th></tr>
                    <tr class="chatChannelBoxItem" onClick="chat.sendCommand(['/gonline']);"><td>/gonline</td><td>Estado de conexión de Alianza</td></tr>
                    <tr class="chatChannelBoxItem" onClick="chat.sendCommand(['/fonline']);"><td>/fonline</td><td>Estado de conexión de Familia</td></tr>
                  </table>
                </div>
                <input id="chatInput" type="text" maxlength="140" onFocus="chat.enableField();" onBlur="chat.disableField();">
            </div>
        </div>

        <script language="JavaScript" type="text/javascript">
            var socket = io.connect(null, {port: 9471, reconnect: true, transports: ['websocket', 'flashsocket', 'xhr-polling', 'jsonp-polling', 'htmlfile']});
            window.addEvent('domready', function()
            {
                //Chat Init
                chat.init(21759);
                //socket.connect();
                
                socket.on('message', function(obj)
                {
                    chat.parseServerMessage(obj);
                });

                socket.on('connect', function()
                {
                    socket.emit('authenticate', {
                        session: '01ad56ac4f78a30b681c0c9ecdf5b1a7',
                        id: 21759                    });
                });
                socket.on('disconnect', function(){
                    chat.systemMessage(chatConfig.servermessage.disconnect);
                });
                socket.on('connecting', function(){
                    chat.systemMessage(chatConfig.servermessage.connecting);
                });
                socket.on('connect_failed', function()
                {
                    chat.systemMessage(chatConfig.servermessage.connectFailed);
                });

                window.setInterval(function () {
                    document.title = window.mainFrame.document.title;
                }, 10);
            });

            function chatWhisperTo(user) { return "Mensaje para <b>%1</b>".replace("%1", user); }
            function chatWhisperFrom(user) { return "Mensaje de <b>%1</b>".replace("%1", user); }

            var chatServerMessage = new Array();
            chatServerMessage[chatConfig.servermessage.playerNotFound] = "No se ha encontrado el jugador.";
            chatServerMessage[chatConfig.servermessage.notInGuild] = "No estás en ninguna alianza.";
            chatServerMessage[chatConfig.servermessage.playerOnline] = "%0 ahora está conectado al chat.";
            chatServerMessage[chatConfig.servermessage.playerOffline] = "%0 no está conectado al chat ahora mismo.";
            chatServerMessage[chatConfig.servermessage.disconnect] = "La conexión se ha interrumpido.";
            chatServerMessage[chatConfig.servermessage.connected] = "Bienvenido al chat de la Provincia 14";
            chatServerMessage[chatConfig.servermessage.connecting] = "Se está estableciendo la conexión.";
            chatServerMessage[chatConfig.servermessage.connectFailed] = "La conexión ha fallado.";
            chatServerMessage[chatConfig.servermessage.levelUp] = "%0 tiene ahora el nivel %1.";
            chatServerMessage[chatConfig.servermessage.guildJoined] = "%0 ha entrado a la alianza.";
            chatServerMessage[chatConfig.servermessage.guildLeaved] = "%0 ha abandonado la alianza.";
            chatServerMessage[chatConfig.servermessage.complainSended] = "Tu mensaje se ha enviado";
            chatServerMessage[chatConfig.servermessage.muted] = "No tienes autorización para escribir.";
            chatServerMessage[chatConfig.servermessage.notWhisperSelf] = "No puedes susurrarte a ti mismo.";
            chatServerMessage[chatConfig.servermessage.messageIgnored] = "No puedes enviar mensajes a este jugador.";
            chatServerMessage[chatConfig.servermessage.playerMuted] = "%0 ha sido silenciado.";
            chatServerMessage[chatConfig.servermessage.broadcast] = "Sistema: %0";
            chatServerMessage[chatConfig.servermessage.commandNotFound] = "No puedes enviar mensajes a este jugador.";
            chatServerMessage[chatConfig.servermessage.guildOnlineInfo] = "Miembros de la alianza en elchat: %0";
            chatServerMessage[chatConfig.servermessage.familiaOnlineInfo] = "Miembros de tu Familia en el chat: %0";

            var txtWhisper = "Susurrar";
            var txtReport = "Denunciar";
            var txtProvince = "Provincia";
            var txtGuild = "Alianza";
        </script>
    </body>
</html>