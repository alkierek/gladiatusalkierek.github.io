window.addEvent('resize', function()
{
    chat.fixPosition();
});

function wheel(event)
{
    if (!Browser.ie) return;

    var delta = 0;
    if (!event) {
        event = window.mainFrame.window.event;
    }
    if (event.srcElement.type == 'textarea' || event.srcElement.type == 'text')
        return;

    if (event.wheelDelta) {
        delta = event.wheelDelta / 120;
    }
    else if (event.detail) {
        delta = -event.detail / 3;
    }
    var sdr = window.mainFrame.document.documentElement.clientHeight * 0.15;
    if (delta) {
        if (delta < 0) {
            window.mainFrame.window.scrollBy(0, sdr);
        }
        else {
            window.mainFrame.window.scrollBy(0, -sdr);
        }
    }
}

function send(recipient, channel, message)
{
    socket.json.send({
        recipient: recipient,
        channel: channel,
        message: message
    });
}

function swapChannelSelect()
{
    var e = $("chatChannelBox");
    if(e.getStyle("display") == "none")
    {
        e.setStyle("display", "block");
        e.setStyle("zIndex", "5");
    }
    else
        e.setStyle("display", "none");
}

function fillZero(zahl,laenge)
{
    var neu = zahl;
    while(neu.length<laenge)
    {
        neu = "0"+neu;
    }
    return neu;
}

var Chat = new Class({
    aktWindow: "",
    windows: null,
    lineNumbers: new Array(),
    maxLinenumber: 250,
    minimizedHorizontal: false,
    minimizedVertical: true,
    dragging: false,
    lastText: [],
    returnUser: "",
    whisperUser: 0,
    connected: false,
    aktsize: null,
    command: chatConfig.cmdCommon,
    playerMenueOpened: false,
    userId: 0,

    enableField : function()
    {
        $('chatInput').style.border = "1px solid white";
    },

    disableField : function()
    {
        $('chatInput').style.border = "0px";
    },

    initWindows : function()
    {
        this.newChannelWindow('guild', chatConfig.cmdGuild);
        this.newChannelWindow('general', chatConfig.cmdCommon);
        this.setAktChannelWindow('general');
    },

    systemMessage: function(messageType)
    {
        this.newMessage('general', {
            channel: chatConfig.chanSystem,
            messageType: messageType
        });
    },

    parseServerMessage : function(message)
    {
        this.newMessage('general', message);
        if (message.channel != chatConfig.chanCommon)
            this.newMessage('guild', message);
    },

    parseClientMessage : function(message)
    {
        var tmp  = message.split(" ");

        var cmd  = tmp[0];
        var check = this.checkChannel(cmd);
        if(!check) return true;

        var text = "";
        var textposi = 0;

        if(cmd==chatConfig.cmdWhisper)
        {
            if(tmp.length < 2) return true;
            this.whisperUser = tmp[1];
            this.selectChannel(cmd);
            textposi = 2;
        }
        else
        {
            this.whisperUser = 0;
            this.selectChannel(cmd);
            textposi = 1;
        }

        if(tmp.length > (textposi+1)) for(var i=textposi; i < tmp.length; i++) text += " " + tmp[i];
        $('chatInput').value = text.trim();
        return false;
    },

    startWhisper: function(recipient)
    {
        this.closePlayerMenue();
        this.whisperUser = recipient;
        this.selectChannel(chatConfig.cmdWhisper);
        window.$('chatInput').focus()
    },

    sendComplain: function(playerId, playerName, ts)
    {
        socket.emit('complain', {id: playerId, name: playerName, ts: ts});
        this.systemMessage(chatConfig.servermessage.complainSended);
        this.closePlayerMenue();
    },

    togglePlayerMenue: function(source, playerName, playerId, ts)
    {
        if (this.playerMenueOpened)
            this.closePlayerMenue();
        else
            this.openPlayerMenue(source, playerName, playerId, ts);
    },

    openPlayerMenue: function(source, playerName, playerId, ts)
    {
        if (this.playerMenueOpened) return;

        var box = $('playerMenue');
        box.empty();

        var html = "<b>" + playerName + "</b><br />";
        html += "<a onclick=\"chat.startWhisper('" + playerName + "');\">" + txtWhisper + "</a>";
        html += "<a onclick=\"chat.sendComplain(" + playerId + ", '" + playerName + "', " + ts + ");\">" + txtReport + "</a>";

        box.set('html', html);

        var position = $(source).getPosition();
        box.setStyle('left', position.x);
        box.setStyle('top', position.y - box.getSize().y);
        box.fade('in');
        window.setTimeout("chat.playerMenueOpened = true;", 10);
    },

    closePlayerMenue: function()
    {
        if (!this.playerMenueOpened) return;
        
        $('playerMenue').fade('out');
        this.playerMenueOpened = false;
    },

    newMessage : function(channelWindow, message)
    {
        //message.channel, message.username, message.userid, message.message
        var zeit = new Date();
        var ts = fillZero(zeit.getHours().toString(),2) + ":"+fillZero(zeit.getMinutes().toString(),2)+":"+fillZero(zeit.getSeconds().toString(),2);
        var text = ts;

        if (message.channel == chatConfig.chanSystem)
        {
            var textColor = chatConfig.servermessageColor[message.messageType];
            var finalText = chatServerMessage[message.messageType];

            for (key in message.params)
                finalText = finalText.replace("%" + key,  message.params[key]);

            text += "&nbsp;" + finalText;
        }
        else
        {
            var textColor = chatConfig.chanTypeColor[message.channel];
            var userName = message.username;

            if (userName && message.userid != this.userId)
                userName = "<span style='cursor:pointer;font-weight:bold;' onclick=\"chat.togglePlayerMenue(this, '" + userName + "', '" + message.userid + "', " + message.ts + ");\">" + userName + "</span>";

            if (userName)
            {
                if(message.channel==chatConfig.chanWhisperSent)
                    text += "&nbsp;" + chatWhisperTo(userName) + ":";
                else if(message.channel==chatConfig.chanWhisper)
                    text += "&nbsp;" + chatWhisperFrom(userName) + ":";
                else
                    text += "&nbsp;" + userName + ":";

                text += "&nbsp;" + message.message;
            }
        }

        this.lineNumbers[channelWindow]++;


        var scrollSize = $('chat_' + channelWindow).getScrollSize();
        var scrolled = $('chat_' + channelWindow).getScroll();
        var size = $('chat_' + channelWindow).getSize();

        if ((scrollSize.y - scrolled.y) <= size.y)
            var jumpToLastLine = true;
        else
            var jumpToLastLine = false;

        var newText = new Element('div');
        newText.id = "chattext_" + channelWindow + "_" + this.lineNumbers[channelWindow];
        newText.addClass('chatLine');
        newText.setStyle('color', textColor);
        newText.set('html', text);

        $('chat_'+channelWindow).appendChild(newText);
        this.lastText[channelWindow] = newText;


        if (jumpToLastLine)
            this.jumpToLastLine(channelWindow);

        if(message.channel == chatConfig.chanWhisper)
            this.returnUser = message.username;

        if(this.lineNumbers[channelWindow] > this.maxLinenumber)
        {
            $('chat_'+channelWindow).removeChild($('chattext_'+channelWindow+'_' + (this.lineNumbers[channelWindow]-this.maxLinenumber)));
        }
    },

    sendMessage : function()
    {
        $("chatChannelBox").setStyle("display", "none");
        //window.setTimeout("focusMain();",200);
        var text = $('chatInput').value;
        if(!text) return;
        $('chatInput').value = "";

        var tmp  = text.split(" ");
        var cmd  = tmp[0];

        if (cmd.charAt(0) == '/')
            this.sendCommand(tmp);
        else
            send(this.whisperUser, this.getChannelType(this.command), text);
    },

    sendCommand: function(command)
    {
        socket.emit('command', command);
        $("chatChannelBox").setStyle("display", "none");
    },

    newChannelWindow : function(windowName, defaultCommand)
    {
        if(this.windows.has(windowName)) return;
        var tab = $("tab_" + windowName);
        tab.addEvent('click', function(){
            chat.setAktChannelWindow(windowName);
        });

        var box = new Element('div');
        box.id="chat_" + windowName;
        box.setStyles({
            position: 'absolute',
            left: '13px',
            top: 0,
            height: '100%',
            overflow: 'auto',
            display: 'none'
        });
        box.addClass('chatViewBig');

        box.onclick = function () {chat.closePlayerMenue();};

        box.inject($('chatContent'));
        this.windows.set(windowName, defaultCommand);
        this.setAktChannelWindow(windowName);
        this.lineNumbers[windowName] = 0;
    },

    setAktChannelWindow : function(windowName)
    {
        if(this.aktWindow)
        {
            $('chat_' + this.aktWindow).style.display = 'none';
            $('tab_' + this.aktWindow).removeClass("chatTabActive");
            $('tab_' + this.aktWindow).addClass("chatTabInactive");
        }
        $('chat_' + windowName).style.display = 'block';
        $('tab_' + windowName).addClass("chatTabActive");
        $('tab_' + windowName).removeClass("chatTabInactive");

        this.aktWindow = windowName;

        this.jumpToLastLine(windowName);

        if (($('chatInput').value).trim().length == 0)
        {
            if(this.windows.get(windowName) !== false)
                this.selectChannel(this.windows.get(windowName));
            else
                this.selectChannel(chatConfig.cmdCommon);
        }
    },

    checkChannel : function(channel)
    {
        var type = this.getChannelType(channel);
        var name = this.getChannelName(channel);

        return type && name;
    },

    selectChannel : function(command)
    {
        var type = this.getChannelType(command);
        var name = this.getChannelName(command);

        var check = type && name;
        if(check)
        {
            $("chatAktChannel").setStyle("color", chatConfig.chanTypeColor[type]);
            $("chatInput").setStyle("color", chatConfig.chanTypeColor[type]);
            $("chatAktChannel").set("html", name);
            if(command==chatConfig.cmdReturn)
            {
                command = chatConfig.cmdWhisper;
                this.whisperUser = this.returnUser;
            }
            this.command = command;
        }
        this.fixInput();

        $("chatChannelBox").setStyle("display", "none");
    },

    getChannelType : function(command)
    {
        switch(command)
        {
            case chatConfig.cmdCommon:
                return chatConfig.chanCommon;
            case chatConfig.cmdGuild:
                return chatConfig.chanGuild;
            case chatConfig.cmdReturn:
            case chatConfig.cmdWhisper:
                return chatConfig.chanWhisper;
            default: return 0;
        }
    },

    getChannelName : function(command)
    {
        switch(command)
        {
            case chatConfig.cmdCommon:
                return txtProvince + ":";
            case chatConfig.cmdGuild:
                return txtGuild + ":";
            case chatConfig.cmdReturn:
                if(this.returnUser) return chatWhisperTo(this.returnUser) + ":"; break;
            case chatConfig.cmdWhisper:
                return chatWhisperTo(this.whisperUser) + ":";
            default: "";
        }
    },

    minimizeHorizontal : function()
    {
        if(this.minimizedHorizontal) return;

        $('chatBox').removeClass('chatBoxHorizontalBig').addClass('chatBoxHorizontalSmall');
        $('chatMoveBar').removeClass('chatHeaderBig').addClass('chatHeaderSmall');
        $('chatContent').removeClass('chatContentHorizontalBig').addClass('chatContentHorizontalSmall');
        $('chatFooter').removeClass('chatFooterBig').addClass('chatFooterSmall');

        $('chat_general').removeClass('chatViewBig').addClass('chatViewSmall');
        $('chat_guild').removeClass('chatViewBig').addClass('chatViewSmall');

        $('chatButtonMinMaxHorizontal').onclick = function(){chat.maximizeHorizontal();}
        $('chatButtonMinMaxHorizontal').removeClass('chatButtonMinHorizontal').addClass('chatButtonMaxHorizontal');

        this.minimizedHorizontal = true;
        this.fixInput();
        this.fixButtons();
        this.fixPosition();
        this.jumpToLastLine(this.aktWindow);
    },

    maximizeHorizontal : function()
    {

        if(!this.minimizedHorizontal) return;

        $('chatBox').removeClass('chatBoxHorizontalSmall').addClass('chatBoxHorizontalBig');
        $('chatMoveBar').removeClass('chatHeaderSmall').addClass('chatHeaderBig');
        $('chatContent').removeClass('chatContentHorizontalSmall').addClass('chatContentHorizontalBig');
        $('chatFooter').removeClass('chatFooterSmall').addClass('chatFooterBig');

        $('chat_general').removeClass('chatViewSmall').addClass('chatViewBig');
        $('chat_guild').removeClass('chatViewSmall').addClass('chatViewBig');

        $('chatButtonMinMaxHorizontal').onclick = function(){chat.minimizeHorizontal();}
        $('chatButtonMinMaxHorizontal').removeClass('chatButtonMaxHorizontal').addClass('chatButtonMinHorizontal');

        this.minimizedHorizontal = false;
        this.fixInput();
        this.fixButtons();
        this.fixPosition();
    },

    minimizeVertical : function()
    {
        if(this.minimizedVertical) return;

        $('chatBox').removeClass('chatBoxVerticalBig').addClass('chatBoxVerticalSmall');
        $('chatContent').removeClass('chatContentVerticalBig').addClass('chatContentVerticalSmall');

        $('chatButtonMinMaxVertical').onclick = function(){chat.maximizeVertical();}
        $('chatButtonMinMaxVertical').removeClass('chatButtonMinVertical').addClass('chatButtonMaxVertical');

        var position = $('chatBox').getCoordinates();
        $('chatBox').setStyle('top', position.top + 170);

        this.minimizedVertical = true;
        this.fixPosition();
        this.jumpToLastLine(this.aktWindow);
    },

    maximizeVertical : function()
    {

        if(!this.minimizedVertical) return;

        $('chatBox').removeClass('chatBoxVerticalSmall').addClass('chatBoxVerticalBig');
        $('chatContent').removeClass('chatContentVerticalSmall').addClass('chatContentVerticalBig');

        $('chatButtonMinMaxVertical').onclick = function(){chat.minimizeVertical();}
        $('chatButtonMinMaxVertical').removeClass('chatButtonMaxVertical').addClass('chatButtonMinVertical');

        var position = $('chatBox').getCoordinates();
        $('chatBox').setStyle('top', position.top - 170);

        this.minimizedVertical = false;
        this.fixPosition();
    },

    fixInput : function()
    {
        if ($('chatFooter').hasClass('chatFooterBig'))
            var width = 420;
        else
            var width = 260;

        var chan = $('chatAktChannel').getSize();
        $('chatInput').setStyle("width",(width-chan['x']-50)+"px");
        $('chatInput').set('opacity','1');
    },

    fixButtons: function()
    {
        var header = $('chatMoveBar').getSize();
        $('chatButtonMinMaxHorizontal').setStyle('left', header['x'] - 37);
        $('chatButtonMinMaxVertical').setStyle('left', header['x'] - 60);
    },

    jumpToLastLine: function(windowName)
    {
        if(this.lastText[windowName] != null)
            this.lastText[windowName].scrollIntoView(false);
    },

    init : function(userId)
    {
        this.userId = userId;
        this.windows = new Hash();
        
        new Drag.Move('chatBox',{
            container: document.body,
            handle: $('chatMoveBar'),
            onStart: function()
            {
                $('transparentHelper').set('opacity',0.01);
            },
            onComplete: function(el){
                chat.aktsize = $('chatBox').getCoordinates();
                    $('transparentHelper').set('opacity',0);
                var position = $('chatBox').getCoordinates();
                Cookie.write('chat_left', position.left);
                Cookie.write('chat_top', position.top);
            }
        });

        var fixen = $('chatBox').getCoordinates();
        if (Cookie.read('chat_left') != null)
            $('chatBox').setStyle('left', Cookie.read('chat_left'));
        else
            $('chatBox').setStyle('left', fixen.left);

        if (Cookie.read('chat_top') != null)
            $('chatBox').setStyle('top', Cookie.read('chat_top'));
        else
            $('chatBox').setStyle('top', fixen.top);

        this.closePlayerMenue();

        this.initWindows();
        this.fixPosition();
        this.fixInput();
        this.fixButtons();

        $('chatInput').addEvent('keydown', function(event)
        {
            if(event && event.code == 32) //Space
            {
                var message = ($('chatInput').value).trim();
                window.setTimeout("chat.parseClientMessage('"+message+"');",200);
            }

            if(event && event.code == 13) //Return
            {
                chat.sendMessage();
                return false;
            }
        });
    },

    fixPosition: function()
    {
        var windowSize = window.getSize();
        var chatSize = $('chatBox').getCoordinates();

        if ((chatSize.top + chatSize.height) > windowSize.y)
            $('chatBox').setStyle('top', windowSize.y - chatSize.height);
        else if (chatSize.top < 0)
            $('chatBox').setStyle('top', 0);

        if ((chatSize.left + chatSize.width) > windowSize.x)
            $('chatBox').setStyle('left', windowSize.x - chatSize.width);
        else if (chatSize.left < 0)
            $('chatBox').setStyle('left', 0);

        var position = $('chatBox').getCoordinates();
        Cookie.write('chat_left', position.left);
        Cookie.write('chat_top', position.top);
    }
});

var chat = new Chat();