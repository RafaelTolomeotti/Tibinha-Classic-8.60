function onStepIn(cid, item, position, fromPosition)
if (not isPlayer(cid)) then
        return false
    end
	
	doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_ORANGE, "Cuidado! N�o se movimente muito ou pode acabar matando seu time.")
   return true
end