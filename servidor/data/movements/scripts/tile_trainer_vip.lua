eventsId = {}

local function rechargeStamina(cid)
if not isPlayer(cid) then
	eventsId[cid] = nil
	return
end

    doPlayerAddStamina(cid, 1)
    eventsId[cid] = addEvent(rechargeStamina, 3 * 60 * 1000, cid)
end

function onStepIn(cid, item, position, lastPosition, fromPosition, toPosition, actor)
    if isPlayer(cid) then
        eventsId[cid] = addEvent(rechargeStamina, 3 * 60 * 1000, cid)
		doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_ORANGE, "Bem vindo aos trainers VIP's " .. getCreatureName(cid) .."! Voc� receber� 1 minuto de stamina a cada 3 minutos nos trainers VIP's.")
    end

    return true
end

function onStepOut(cid, item, position, lastPosition, fromPosition, toPosition, actor)
    if isPlayer(cid) then
        stopEvent(eventsId[cid])
        eventsId[cid] = nil
    end

    return true
end