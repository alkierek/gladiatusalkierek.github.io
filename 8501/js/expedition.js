function attack(location, stage, cooldown, params)
{
    if (params == undefined)
        params = '';
    sendRequest('get', 'ajax.php', 'mod=location&submod=attack&location=' + location + '&stage=' + stage  + params + '&cooldown=' + cooldown);
}

function buyBonus(country, location, stage, bonus, isServerquest)
{
    isServerquest = typeof isServerquest !== 'undefined' ? isServerquest : 0;
    sendRequest('get', 'ajax.php', 'mod=location&submod=buyBonus&country=' + country + '&location=' + location + '&stage=' + stage + '&bonus=' + bonus + '&isServerquest=' + isServerquest);
    blackoutDialog(false);
}