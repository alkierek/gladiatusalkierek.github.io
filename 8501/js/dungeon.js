function startFight(posi,did)
{
	sendRequest('get', 'ajax/doDungeonFight.php', 'did='+did+'&posi='+posi);
}

function startTrainingFight(dNr,npcnr)
{
	sendRequest('get', 'ajax/doTrainingFight.php', 'dnr='+dNr+'&npcnr='+npcnr);
}