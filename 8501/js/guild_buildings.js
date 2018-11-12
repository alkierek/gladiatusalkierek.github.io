var currentId = "";
function showBuildings( id)
{
	
	if (document.getElementById("guild_build_description_"+id)== null) return;
	
	if (currentId == id)
	{
		document.getElementById("guild_build_description_"+id).style.display = 'none';
		document.getElementById("arrow_"+id).className = "guild_build_arrow_visible";
		currentId = "";
	}
	else if (currentId == "")
	{
		div = document.getElementById("guild_build_description_"+id).style.display = 'block';
		document.getElementById("arrow_"+id).className = "guild_build_arrow_hidden";
		currentId = id;
	}
	else
	{
		document.getElementById("guild_build_description_"+currentId).style.display = 'none';
		document.getElementById("arrow_"+currentId).className = "guild_build_arrow_visible";
		document.getElementById("guild_build_description_"+id).style.display = 'block';
		document.getElementById("arrow_"+id).className = "guild_build_arrow_hidden";
		currentId = id;
	}
}