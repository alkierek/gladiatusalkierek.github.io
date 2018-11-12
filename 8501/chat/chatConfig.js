(function(exports){

    exports.minimizeWidth = 240;
    exports.minimizeHeight = 70;

    exports.chanCommon = 1;
    exports.chanGuild = 2;
    exports.chanSystem = 666;
    exports.chanWhisper = 1000;
    exports.chanWhisperSent = 1001;

    exports.cmdCommon = "/p";
    exports.cmdGuild = "/g";
    exports.cmdReturn = "/r";
    exports.cmdWhisper = "/w";

    exports.tabColorNewMessage = 'lime';

    exports.chanTypeColor = new Array();
    exports.chanTypeColor[exports.chanCommon] = 'white';
    exports.chanTypeColor[exports.chanGuild] = 'lime';
    exports.chanTypeColor[exports.chanSystem] = 'red';
    exports.chanTypeColor[exports.chanWhisper] = 'turquoise';
    exports.chanTypeColor[exports.chanWhisperSent] = 'turquoise';

    exports.servermessage = new Array();
    exports.servermessage.playerNotFound = "1";
    exports.servermessage.notInGuild = "2";
    exports.servermessage.playerOnline = "3";
    exports.servermessage.playerOffline = "4";
    exports.servermessage.disconnect = "5";
    exports.servermessage.connected = "6";
    exports.servermessage.connecting = "7";
    exports.servermessage.connectFailed = "8";
    exports.servermessage.levelUp = "9";
    exports.servermessage.guildJoined = "10";
    exports.servermessage.guildLeaved = "11";
    exports.servermessage.complainSended = "12";
    exports.servermessage.muted = "13";
    exports.servermessage.notWhisperSelf = "14";
    exports.servermessage.messageIgnored = "15";
    exports.servermessage.playerMuted = "16";
    exports.servermessage.broadcast = "17";
    exports.servermessage.commandNotFound = "18";
    exports.servermessage.guildOnlineInfo = "19";
    exports.servermessage.familiaOnlineInfo = "20";

    exports.servermessageColor = new Array();
    exports.servermessageColor[exports.servermessage.playerNotFound] = 'red';
    exports.servermessageColor[exports.servermessage.notInGuild] = 'red';
    exports.servermessageColor[exports.servermessage.playerOnline] = 'lime';
    exports.servermessageColor[exports.servermessage.playerOffline] = 'red';
    exports.servermessageColor[exports.servermessage.disconnect] = 'red';
    exports.servermessageColor[exports.servermessage.connected] = 'lime';
    exports.servermessageColor[exports.servermessage.connecting] = 'silver';
    exports.servermessageColor[exports.servermessage.connectFailed] = 'red';
    exports.servermessageColor[exports.servermessage.levelUp] = 'lime';
    exports.servermessageColor[exports.servermessage.guildJoined] = 'lime';
    exports.servermessageColor[exports.servermessage.guildLeaved] = 'lime';
    exports.servermessageColor[exports.servermessage.complainSended] = 'lime';
    exports.servermessageColor[exports.servermessage.muted] = 'red';
    exports.servermessageColor[exports.servermessage.notWhisperSelf] = 'red';
    exports.servermessageColor[exports.servermessage.messageIgnored] = 'red';
    exports.servermessageColor[exports.servermessage.playerMuted] = 'red';
    exports.servermessageColor[exports.servermessage.broadcast] = '#FAF311';
    exports.servermessageColor[exports.servermessage.commandNotFound] = 'red';
    exports.servermessageColor[exports.servermessage.guildOnlineInfo] = '#FAF311';
    exports.servermessageColor[exports.servermessage.familiaOnlineInfo] = '#FAF311';


})(typeof exports === 'undefined'? this['chatConfig']={}: exports);
