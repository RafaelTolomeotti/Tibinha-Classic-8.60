function onStepIn(cid, item, position, fromPosition)
if (not isPlayer(cid)) then
        return false
    end
	
	doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_ORANGE, "Sobreviva por 5 minutos e voc� ser� teleportado para sala de recompensas. SIMPLES ASSIM rs")
	return true
end