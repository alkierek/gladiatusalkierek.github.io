function startFight(did)
{
	sendRequest('get', 'ajax/doArenaFight.php', 'did='+did);
}

function startFightWithName()
{
	var name = document.getElementById('ujn').value;
	sendRequest('get', 'ajax/doArenaFight.php', 'dname='+encodeURIComponent(name));
}

function startGroupFight(did)
{
	sendRequest('get', 'ajax/doGroupFight.php', 'did='+did);
}

function startGroupFightWithName()
{
	var name = document.getElementById('ujn').value;
	sendRequest('get', 'ajax/doGroupFight.php', 'dname='+encodeURIComponent(name));
}

function startFightConfirmed(did)
{
	defenderId = 0;
	sendRequest('get', 'ajax/doArenaFight.php', 'did='+did+'&c=1');
}

var provinciarumDefenderId = 0;
var provinciarumServer = '<?=GL_Config_Server::getServerNr();?>';
var provinciarumCountry = '<?=GL_Config_Server::COUNTRY?>';
var arenaType = 0

function startProvinciarumFight(aType, userId, serverId,country)
{
    arenaType = aType;
    provinciarumDefenderId = userId;
    provinciarumServer = serverId;
    provinciarumCountry = country;
    sendRequest('get', 'ajax.php', 'mod=arena&submod=doCombat&aType='+arenaType+'&opponentId='+userId+'&serverId='+serverId+'&country='+country, 'attack_player_'+serverId + userId, 'arena_spinner', 'arena_spinner-img', 'arena_spinner-content');
}

function startProvinciarumFightConfirmed()
{
    sendRequest('get', 'ajax.php', 'mod=arena&submod=confirmDoCombat&aType='+arenaType+'&opponentId='+provinciarumDefenderId+'&serverId='+provinciarumServer+'&country='+provinciarumCountry);
}