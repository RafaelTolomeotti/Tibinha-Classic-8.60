function onStepIn(cid, item, position, fromPosition)
if (not isPlayer(cid)) then
        return false
    end
	
	if (item.aid == 45350) then
		doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_ORANGE, "Para avan�ar de sala, der USE no carrinho. � necess�rio limpar os monstros da sala.")
	end
   return true
end