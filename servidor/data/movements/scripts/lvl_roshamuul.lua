function onStepIn(cid, item, position, fromPosition)
if (not isPlayer(cid)) then
	return false
end
	
    if isPlayer(cid) then
		if getPlayerLevel(cid) < 100 then
			doPlayerSendTextMessage(cid, 25, "Esta �rea � muito perigosa. Apenas jogadores level 100+")
			doTeleportThing(cid, fromPosition, true)
			doSendMagicEffect(getThingPos(cid), CONST_ME_MAGIC_RED)
		elseif getPlayerLevel(cid) >= 101 and getPlayerLevel(cid) < 190 then
			doPlayerSendTextMessage(cid, 25, "CUIDADO! �rea perigosa. Recomendado 200+")
		end
	end
    return true
end