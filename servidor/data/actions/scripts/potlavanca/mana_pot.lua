function onUse(cid, item, fromPosition, itemEx, toPosition)

-- ALL VOC
if (getPlayerVocation(cid) >= 0 or getPlayerVocation(cid) <= 8) then
	if getPlayerFreeCap(cid) > 5418.00 and getPlayerMoney(cid) >= 80000 then
		if doPlayerRemoveMoney(cid, 80000) then
			local purple_bp = doPlayerAddItem(cid, 2001, 1)
			for i = 1, tonumber(getItemInfo(2001).maxItems) do
				doAddContainerItem(purple_bp, 7620, 100 or 1)
			end
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� comprou 1 BP de mana potions por 80k.")
			doSendAnimatedText(getPlayerPosition(cid), "$$$$", COLOR_DARKPINK)
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter 80k em sua BP para fazer esta compra.")
		end
	elseif getPlayerFreeCap(cid) > 270.00 and getPlayerMoney(cid) >= 5000 then
		if doPlayerRemoveMoney(cid, 5000) then
			doPlayerAddItem(cid, 7620, 100)
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� comprou 100 de mana potions por 5k.")
			doSendAnimatedText(getPlayerPosition(cid), "$$$$", COLOR_DARKPINK)
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter 5k em sua BP para fazer esta compra.")
		end
	else
		doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter mais que '5418.00 oz' e '80k' para comprar BP ou '270.00 oz' e '5k' para comprar 100.")
	end
else
	doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Sua voca��o n�o utiliza este item.")
end
return doTransformItem(item.uid, item.itemid == 1945 and 1946 or 1945)
end