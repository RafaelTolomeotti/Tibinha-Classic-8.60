function onUse(cid, item, fromPosition, itemEx, toPosition)

-- ALL VOC
if (getPlayerVocation(cid) >= 0 or getPlayerVocation(cid) <= 8) then
	if getPlayerFreeCap(cid) > 1418.00 and getPlayerMoney(cid) >= 173000 then
		if doPlayerRemoveMoney(cid, 173000) then
			local purple_bp = doPlayerAddItem(cid, 2003, 1)
			for i = 1, tonumber(getItemInfo(2003).maxItems) do
				doAddContainerItem(purple_bp, 2268, 100 or 1)
			end
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� comprou 1 BP de sudden death runes por 173k.")
			doSendAnimatedText(getPlayerPosition(cid), "$$$$", COLOR_GREY)
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter 173k em sua BP para fazer esta compra.")
		end
	elseif getPlayerFreeCap(cid) > 70.00 and getPlayerMoney(cid) >= 10800 then
		if doPlayerRemoveMoney(cid, 10800) then
			doPlayerAddItem(cid, 2268, 100)
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� comprou 100 de sudden death runes por 10.8k.")
			doSendAnimatedText(getPlayerPosition(cid), "$$$$", COLOR_GREY)
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter 10.8k em sua BP para fazer esta compra.")
		end
	else
		doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter mais que '1418.00 oz' e '173k' para comprar BP ou '70.00 oz' e '10.8k' para comprar 100.")
	end
else
	doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Sua voca��o n�o utiliza este item.")
end
return doTransformItem(item.uid, item.itemid == 1945 and 1946 or 1945)
end