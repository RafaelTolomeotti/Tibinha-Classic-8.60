function onSay(cid, words, param)


if (getPlayerBlessing(cid,1)) then
	return doPlayerSendTextMessage(cid,25,"Voc� j� possui bless.")
end
	
	local position = getCreaturePosition(cid)
	if getPlayerLevel(cid) <= 79 then
		if getPlayerMoney(cid) >= 50000 then
			if doPlayerRemoveMoney(cid, 50000) then
				for b=1, 5 do
					doPlayerAddBlessing(cid, b)
				end
				
				doPlayerSendTextMessage(cid, 27, "Voc� comprou 'All Blessings'.")
				doCreatureSay(cid, "Blessed!", TALKTYPE_ORANGE_1)
				doSendMagicEffect(position, 49)
			else
				doPlayerSendTextMessage(cid,25,"ERROR! Please contact the administrator.")
			end
		else
			doPlayerSendTextMessage(cid,25,"Voc� n�o tem dinheiro suficiente. Voc� precisa de 50k!")
		end
		
	elseif getPlayerLevel(cid) >= 80 and getPlayerLevel(cid) <= 99 then
		if getPlayerMoney(cid) >= 65000 then
			if doPlayerRemoveMoney(cid, 65000) then
				for b=1, 5 do
					doPlayerAddBlessing(cid, b)
				end
					
				doPlayerSendTextMessage(cid, 27, "Voc� comprou 'All Blessings'.")
				doCreatureSay(cid, "Blessed!", TALKTYPE_ORANGE_1)
				doSendMagicEffect(position, 49)
			else
				doPlayerSendTextMessage(cid,25,"ERROR! Please contact the administrator.")
			end
		else
			doPlayerSendTextMessage(cid,25,"Voc� n�o tem dinheiro suficiente. Voc� precisa de 65k!")
		end
		
	elseif getPlayerLevel(cid) >= 100 and getPlayerLevel(cid) <= 129 then
		if getPlayerMoney(cid) >= 80000 then
			if doPlayerRemoveMoney(cid, 80000) then
				for b=1, 5 do
					doPlayerAddBlessing(cid, b)
				end
					
				doPlayerSendTextMessage(cid, 27, "Voc� comprou 'All Blessings'.")
				doCreatureSay(cid, "Blessed!", TALKTYPE_ORANGE_1)
				doSendMagicEffect(position, 49)
			else
				doPlayerSendTextMessage(cid,25,"ERROR! Please contact the administrator.")
			end
		else
			doPlayerSendTextMessage(cid,25,"Voc� n�o tem dinheiro suficiente. Voc� precisa de 80k!")
		end
		
	elseif getPlayerLevel(cid) >= 130 and getPlayerLevel(cid) <= 199 then
		if getPlayerMoney(cid) >= 100000 then
			if doPlayerRemoveMoney(cid, 100000) then
				for b=1, 5 do
					doPlayerAddBlessing(cid, b)
				end
					
				doPlayerSendTextMessage(cid, 27, "Voc� comprou 'All Blessings'.")
				doCreatureSay(cid, "Blessed!", TALKTYPE_ORANGE_1)
				doSendMagicEffect(position, 49)
			else
				doPlayerSendTextMessage(cid,25,"ERROR! Please contact the administrator.")
			end
		else
			doPlayerSendTextMessage(cid,25,"Voc� n�o tem dinheiro suficiente. Voc� precisa de 100k!")
		end
		
	elseif getPlayerLevel(cid) >= 200 then
		if getPlayerMoney(cid) >= 150000 then
			if doPlayerRemoveMoney(cid, 150000) then
				for b=1, 5 do
					doPlayerAddBlessing(cid, b)
				end
					
				doPlayerSendTextMessage(cid, 27, "Voc� comprou 'All Blessings'.")
				doCreatureSay(cid, "Blessed!", TALKTYPE_ORANGE_1)
				doSendMagicEffect(position, 49)
			else
				doPlayerSendTextMessage(cid,25,"ERROR! Please contact the administrator.")
			end
		else
			doPlayerSendTextMessage(cid,25,"Voc� n�o tem dinheiro suficiente. Voc� precisa de 150k!")
		end
    end
    return true
end