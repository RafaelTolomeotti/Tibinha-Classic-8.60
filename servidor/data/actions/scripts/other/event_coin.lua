function onUse(cid, item, itemEx, topos, frompos) 

    if getPlayerLevel(cid) < 50 then 
        return doPlayerSendCancel(cid, "Voc� n�o possui level 50+ para utilizar este item.") 
    end

	if getPlayerStorageValue(cid, 29997) - os.time() <= 0 then 
		if doPlayerRemoveItem(cid, 12686, 1) then
			setPlayerStorageValue(cid, 29997, 6 * 60 * 60 + os.time())
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_ORANGE, "Voc� usou 1 Event Coin! Voc� pode acessar as Hunts por 6 horas.")
			doSendMagicEffect(frompos, 30)
		else
			return doPlayerSendCancel(cid, "Voc� precisa ter o item em sua 'BP'.")
		end
		
	elseif getPlayerStorageValue(cid, 29997) - os.time() > 0 then 
		doPlayerSendTextMessage (cid, 19, "Para usar novamente o item voc� deve esperar ".. convertTime(getPlayerStorageValue(cid, 29997) - os.time()) ..".")
	end
   return true
end