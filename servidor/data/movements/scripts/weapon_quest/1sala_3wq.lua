function onStepIn(cid, item, position, fromPosition)
if (not isPlayer(cid)) then
	return false
end
	
	doTeleportThing(cid, fromPosition, true)
	doPlayerSendTextMessage(cid, 27, "Voc� n�o pode seguir por aqui. Encontre outro caminho.")
    return true
end