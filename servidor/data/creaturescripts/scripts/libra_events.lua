function onStatsChange(cid, attacker, type, combat, value)
    if(combat == COMBAT_UNDEFINEDDAMAGE) then
        return true
    end
    if(type == STATSCHANGE_HEALTHLOSS) then
        local dmg = math.ceil((value/2) * (getCreatureHealth(cid) / getCreatureMaxHealth(cid)))
        local pos = getCreaturePosition(cid)
        doCreatureAddHealth(cid, -dmg)
        doPlayerSendTextMessage(attacker, MESSAGE_DAMAGE_DEALT, "Libra of the Zodiac loses " .. dmg .. " hitpoints due to your attack.", dmg, COLOR_RED, pos)
        doSendMagicEffect(pos, CONST_ME_DRAWBLOOD)
        doCreateItem(2016, 2, pos)
        pos = getCreaturePosition(attacker)
        dmg = math.ceil(value / 2)
        doCreatureAddHealth(attacker, -dmg)
        doPlayerSendTextMessage(attacker, MESSAGE_DAMAGE_RECEIVED, "You lose " .. dmg .. " hitpoints due to an attack by Libra of the Zodiac.", dmg, COLOR_RED, pos)
        doSendMagicEffect(pos, CONST_ME_DRAWBLOOD)
        doCreateItem(2016, 2, pos)
        --Didn't bothered to add the messages to the spectators because I thought it's unnecessary
        return false
    end
    return false
end