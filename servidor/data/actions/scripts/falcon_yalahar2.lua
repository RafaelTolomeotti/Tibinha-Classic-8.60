function onUse(cid, item, fromPosition, itemEx, toPosition)

	if isPremium(cid) == true and getPlayerStorageValue(cid, 45506) <= 0 then
		if not isPlayerPzLocked(cid) then
			if getPlayerMoney(cid) >= 100000 then
				if doPlayerRemoveMoney(cid, 100000) then
					setPlayerStorageValue(cid, 45506, 1)
					doTeleportThing(cid, {x=2527,y=1866,z=5})
					doSendMagicEffect(getThingPos(cid), CONST_ME_TELEPORT)
					doPlayerSendTextMessage(cid, 27, "Voc� agora possui acesso vital�cio a esta �rea.")
				else
					doPlayerSendCancel(cid, "ERROR! Contact The Administrator!")
				end
			else
				doPlayerSendCancel(cid, "Desculpe, voc� precisa de 100k para ter acesso.")
			end
		else
			doPlayerSendCancel(cid, "Desculpe, voc� n�o pode estar com 'PZ Bloked'.")
		end

	elseif getPlayerStorageValue(cid, 45506) > 0 then
		if not isPlayerPzLocked(cid) then
			doTeleportThing(cid, {x=2527,y=1866,z=5})
			doSendMagicEffect(getThingPos(cid), CONST_ME_TELEPORT)
		else
			doPlayerSendCancel(cid, "Desculpe, voc� n�o pode estar com 'PZ Bloked'.")
		end

	else
		doPlayerSendTextMessage(cid, 27, "Voc� precisa clicar aqui ao menos 1 vez sendo VIP Account e sua entrada para esta hunt ser� vital�cia.")
	end
	return true
end
