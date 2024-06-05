function onUse(cid, item, fromPosition, itemEx, toPosition)

-- ALL VOC
if (getPlayerVocation(cid) >= 0 or getPlayerVocation(cid) <= 8) then
	if getPlayerFreeCap(cid) > 5418.00 and getPlayerMoney(cid) >= 72000 then
		if doPlayerRemoveMoney(cid, 72000) then
			local purple_bp = doPlayerAddItem(cid, 2000, 1)
			for i = 1, tonumber(getItemInfo(2000).maxItems) do
				doAddContainerItem(purple_bp, 7618, 100 or 1)
			end
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� comprou 1 BP de health potions por 72k.")
			doSendAnimatedText(getPlayerPosition(cid), "$$$$", COLOR_DARKRED)
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter 72k em sua BP para fazer esta compra.")
		end
	elseif getPlayerFreeCap(cid) > 270.00 and getPlayerMoney(cid) >= 4500 then
		if doPlayerRemoveMoney(cid, 4500) then
			doPlayerAddItem(cid, 7618, 100)
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� comprou 100 de health potions por 4.5k.")
			doSendAnimatedText(getPlayerPosition(cid), "$$$$", COLOR_DARKRED)
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter 4.5k em sua BP para fazer esta compra.")
		end
	else
		doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter mais que '5418.00 oz' e '72k' para comprar BP ou '270.00 oz' e '4.5k' para comprar 100.")
	end
else
	doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Sua voca��o n�o utiliza este item.")
end
return doTransformItem(item.uid, item.itemid == 1945 and 1946 or 1945)
end