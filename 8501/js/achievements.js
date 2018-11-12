function toggleDetails(id)
{
	div = document.getElementById(id);
	if (div.style.display == 'none')
	{
		document.getElementById(id).style.display = 'block';
	}
	else
	{
		document.getElementById(id).style.display = 'none';
	}
}

function showAchievement(catId, achievementId)
{
	document.getElementById(catId).style.display='block';
	document.getElementById(achievementId).style.display='block';
}