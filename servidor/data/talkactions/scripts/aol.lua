function onSay(cid, words, param)

	
	local position = getCreaturePosition(cid)
	if getPlayerMoney(cid) >= 20000 then
		if doPlayerRemoveMoney(cid, 20000) then
			doPlayerAddItem(cid, 2173, 1) -- football		
			doPlayerSendTextMessage(cid, 27, "Voc� comprou um 'Amulet of Loss'.")
			doCreatureSay(cid, "Aol!", TALKTYPE_ORANGE_1)
			doSendMagicEffect(position, 12)
		else
			doPlayerSendTextMessage(cid,25,"ERROR! Please contact the administrator.")
		end
	else
		doPlayerSendTextMessage(cid,25,"Voc� n�o tem dinheiro suficiente. Voc� precisa de 20k!")
	end
    return true
end