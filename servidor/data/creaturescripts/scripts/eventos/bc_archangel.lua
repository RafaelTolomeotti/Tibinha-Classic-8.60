local function bc_removetp()
	local bc_tp = getTileItemById({x=297,y=103,z=8}, 1387)
	if bc_tp and bc_tp.uid > 0 then
		doRemoveItem(bc_tp.uid)
	end
end

function onKill(cid, target, damage, flags)
if isPlayer(target) then
	return true
end

	if getCreatureName(target) == "Archangel" then	
		setPlayerStorageValue(cid, 45399, os.time()+10*60)
		setGlobalStorageValue(cid, 30076, 1)
		doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_ORANGE, "[Blood Castle] Voc� derrotou o Archangel. Corra at� o NPC e pegue seu pr�mio.")
		
		if bit.band(flags, 1) == 1 then
			doBroadcastMessage("[Blood Castle] O Archangel foi destru�do! Todos os jogadores que participaram da luta tem 10 minutos para pegar sua recompensa no NPC Arcanjo que fica localizado no in�cio do BloodCastle.")
			addEvent(doBroadcastMessage, 1*1000*60, "[Blood Castle] Evento Finalizado! O Teleporte vai desaparecer em 5 minutos.")
			addEvent(doBroadcastMessage, 5*1000*60, "[Blood Castle] Evento Finalizado! O Teleporte vai desaparecer em 1 minuto.")
			addEvent(doBroadcastMessage, 6*1000*60, "[Blood Castle] Evento Finalizado! O Teleporte fechou.")
			addEvent(bc_removetp, 6*1000*60)
		end
	end
	return true
end