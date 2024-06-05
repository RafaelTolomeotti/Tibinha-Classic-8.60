local pos = {x = 297, y = 110, z = 9}

local function convertTime(a)
  if(type(tonumber(a)) == "number" and a > 0) then
    if (a <= 3599) then
      local minute = math.floor(a/60)
      local second = a - (60 * minute)
      if(second == 0) then
        return ((minute)..((minute > 1) and " minutos" or " minuto"))
      else
        return ((minute ~= 0) and ((minute>1) and minute.." minutos e " or minute.." minuto e ").. ((second>1) and second.." segundos" or second.." segundo") or ((second>1) and second.." segundos" or second.. " segundo"))
      end
    else
      local hour = math.floor(a/3600)
      local minute = math.floor((a - (hour * 3600))/60)
      local second = (a - (3600 * hour) - (minute * 60))
      if (minute == 0 and second > 0) then
        return (hour..((hour > 1) and " horas e " or " hora e "))..(second..((second > 1) and " segundos" or " segundo"))
      elseif (second == 0 and minute > 0) then
        return (hour..((hour > 1) and " horas e " or " hora e "))..(minute..((minute > 1) and " minutos" or " minuto"))
      elseif (second == 0 and minute == 0) then
        return (hour..((hour > 1) and " horas" or " hora"))
      end
      return (hour..((hour > 1) and " horas, " or " hora, "))..(minute..((minute > 1) and " minutos e " or " minuto e "))..(second..((second > 1) and " segundos" or " segundo"))
    end
  end
end

function onStepIn(cid, item, position, fromPosition)
if (not isPlayer(cid)) then
	return false
end

	if isPlayer(cid) then
		if getPlayerItemCount(cid, 2165) >= 1 or getPlayerItemCount(cid, 2202) >= 1 then
			doTeleportThing(cid, fromPosition, true)
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_ORANGE, "Voc� n�o pode entrar com stealth ring. Guarde seu ring de invisibilidade para poder entrar.")
		else
			if getPlayerStorageValue(cid, 45358) - os.time() > 0 then
				if getCreatureCondition(cid, CONDITION_INVISIBLE) == true then
					doRemoveCondition(cid, CONDITION_INVISIBLE)
				end
				
				doTeleportThing(cid, pos, true)
				doSendMagicEffect(getThingPos(cid), CONST_ME_TELEPORT)
				doPlayerPopupFYI(cid, "                                                             [+] Daily Quest [+]\n                                     # �rea totalmente exclusiva do servidor #\n\n- TUTORIAL -\nUm pouco ao sul, possui uma sala demarcada e uma alavanca.\nVoc� deve utilizar ela para entrar na ARENA onde ocorrer�o WAVES de monstros.\nVoc� deve sobreviver durante as 10 WAVES.\nAp�s � 10� WAVE, todos da sala v�o ser teleportados para sala de recompensa.\n\n- INFO -\nVoc� s� poder� fazer a Daily � cada 20hrs.\nVoc� pode fazer a Daily SOLO ou em GRUPO.\nNa Daily, n�o pode atacar outros jogadores.\nSe morrer, poder� fazer novamente.\nSe morrer, perde items/exp/skills normalmente.\nAo utilizar a alavanca, todos na sala demarcada v�o ser teleportados para a ARENA.\n\n  Daily dispon�vel em: ".. convertTime(getPlayerStorageValue(cid, 45358) - os.time()) ..".")
			else
				if getCreatureCondition(cid, CONDITION_INVISIBLE) == true then
					doRemoveCondition(cid, CONDITION_INVISIBLE)
				end
				
				doTeleportThing(cid, pos, true)
				doSendMagicEffect(getThingPos(cid), CONST_ME_TELEPORT)
				doPlayerPopupFYI(cid, "                                                             [+] Daily Quest [+]\n                                     # �rea totalmente exclusiva do servidor #\n\n- TUTORIAL -\nUm pouco ao sul, possui uma sala demarcada e uma alavanca.\nVoc� deve utilizar ela para entrar na ARENA onde ocorrer�o WAVES de monstros.\nVoc� deve sobreviver durante as 10 WAVES.\nAp�s � 10� WAVE, todos da sala v�o ser teleportados para sala de recompensa.\n\n- INFO -\nVoc� s� poder� fazer a Daily � cada 20hrs.\nVoc� pode fazer a Daily SOLO ou em GRUPO.\nNa Daily, n�o pode atacar outros jogadores.\nSe morrer, poder� fazer novamente.\nSe morrer, perde items/exp/skills normalmente.\nAo utilizar a alavanca, todos na sala demarcada v�o ser teleportados para a ARENA.\n\n  Daily j� est� dispon�vel.")
			end
		end
	end
	return true
end

function onAddItem(moveitem, tileitem, position)
	doRemoveItem(moveitem.uid, moveitem.type > 0 and moveitem.type or 1)
	return true
end