function onUse(cid, item, fromPosition, itemEx, toPosition)

-- MENOS KINA
if not(getPlayerVocation(cid) == 4 or getPlayerVocation(cid) == 8) then
	if getPlayerFreeCap(cid) > 5818.00 and getPlayerMoney(cid) >= 128000 then
		if doPlayerRemoveMoney(cid, 128000) then
			local purple_bp = doPlayerAddItem(cid, 2001, 1)
			for i = 1, tonumber(getItemInfo(2001).maxItems) do
				doAddContainerItem(purple_bp, 7589, 100 or 1)
			end
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� comprou 1 BP de strong mana potions por 128k.")
			doSendAnimatedText(getPlayerPosition(cid), "$$$$", COLOR_DARKPINK)
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter 128k em sua BP para fazer esta compra.")
		end
	elseif getPlayerFreeCap(cid) > 290.00 and getPlayerMoney(cid) >= 8000 then
		if doPlayerRemoveMoney(cid, 8000) then
			doPlayerAddItem(cid, 7589, 100)
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� comprou 100 de strong mana potions por 8k.")
			doSendAnimatedText(getPlayerPosition(cid), "$$$$", COLOR_DARKRED)
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter 8k em sua BP para fazer esta compra.")
		end
	else
		doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter mais que '5818.00 oz' e '128k' para comprar BP ou '290.00 oz' e '8k' para comprar 100.")
	end
else
	doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Sua voca��o n�o utiliza este item.")
end
return doTransformItem(item.uid, item.itemid == 1945 and 1946 or 1945)
end