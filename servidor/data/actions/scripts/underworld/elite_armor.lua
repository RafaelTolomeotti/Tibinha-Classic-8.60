function onUse(cid, item, frompos, itemEx, topos)

	if(itemEx.itemid == 12871) then
		if getPlayerItemCount(cid, 12854) >= 100 and getPlayerItemCount(cid, 6500) >= 500 and getPlayerMoney(cid) >= 250000 then
			if getPlayerFreeCap(cid) > 120.00 then
				if doPlayerRemoveItem(cid, 12854, 100) and doPlayerRemoveItem(cid, 6500, 500) and doPlayerRemoveMoney(cid, 250000) then
					doPlayerAddItem(cid, 12863, 1)
					doBroadcastMessage("[UNDERWORLD] ".. getPlayerName(cid) .." acabou de craftar o item elite underworld armor. Parab�ns!", MESSAGE_STATUS_CONSOLE_BLUE)
				else
					doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "ERROR! Contact the Administrator.")
				end
			else
				doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter mais que '120.00 oz' para comprar este item.")
			end
		else
			doPlayerSendTextMessage(cid, 27, "=== Itens necess�rios para craftar ===\n=> 100 Rusty Gears.\n=> 500 Demonic Essence.\n=> 250k.")
		end
				
		doTransformItem(item.uid, 12872)
		doDecayItem(item.uid)
		return true
		
	elseif(itemEx.itemid == 12872) then
        return doPlayerSendCancel(cid, "Aguarde 5 segundos para usar novamente.")
    end
	return true
end