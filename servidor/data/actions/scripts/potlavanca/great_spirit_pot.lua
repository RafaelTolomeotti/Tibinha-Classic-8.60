function onUse(cid, item, fromPosition, itemEx, toPosition)

-- APENAS RP
if (getPlayerVocation(cid) == 3 or getPlayerVocation(cid) == 7) then
	if getPlayerFreeCap(cid) > 6218.00 and getPlayerMoney(cid) >= 304000 then
		if doPlayerRemoveMoney(cid, 304000) then
			local purple_bp = doPlayerAddItem(cid, 7342, 1)
			for i = 1, tonumber(getItemInfo(7342).maxItems) do
				doAddContainerItem(purple_bp, 8472, 100 or 1)
			end
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� comprou 1 BP de great spirit potions por 304k.")
			doSendAnimatedText(getPlayerPosition(cid), "$$$$", COLOR_BROWN)
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter 304k em sua BP para fazer esta compra.")
		end
	elseif getPlayerFreeCap(cid) > 310.00 and getPlayerMoney(cid) >= 19000 then
		if doPlayerRemoveMoney(cid, 19000) then
			doPlayerAddItem(cid, 8472, 100)
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� comprou 100 de great spirit potions por 19k.")
			doSendAnimatedText(getPlayerPosition(cid), "$$$$", COLOR_BROWN)
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter 19k em sua BP para fazer esta compra.")
		end
	else
		doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Voc� precisa ter mais que '6218.00 oz' e '304k' para comprar BP ou '310.00 oz' e '19k' para comprar 100.")
	end
else
	doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Sua voca��o n�o utiliza este item.")
end
return doTransformItem(item.uid, item.itemid == 1945 and 1946 or 1945)
end