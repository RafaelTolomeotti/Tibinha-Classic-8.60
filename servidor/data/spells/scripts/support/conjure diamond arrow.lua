local EXHAUSTION_STORAGE = 1000
local EXHAUSTION_TIME = 60 -- Tempo de exaustão em segundos
local MANA_COST = 1000 -- Custo de mana para conjurar a magia

function setPlayerExhaustion(cid, time)
    doPlayerSetStorageValue(cid, EXHAUSTION_STORAGE, os.time() + time)
end

function getPlayerExhaustion(cid)
    local exhaustionTime = getPlayerStorageValue(cid, EXHAUSTION_STORAGE)
    if exhaustionTime == -1 then
        return 0
    end
    local remainingTime = exhaustionTime - os.time()
    if remainingTime <= 0 then
        setPlayerExhaustion(cid, 0)
        return 0
    end
    return remainingTime
end

function onCastSpell(cid, var)
    local itemID = 12770
    local itemAmount = 100

    local exhaustionTime = getPlayerExhaustion(cid)
    if exhaustionTime > 0 then
        doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "You are exhausted. You need to wait "..exhaustionTime.." seconds.")
        return false
    end

    local playerMana = getPlayerMana(cid)
    if playerMana < MANA_COST then
        doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "You do not have enough mana.")
        return false
    end

    local v = doPlayerAddItem(cid, itemID, itemAmount)
    if v then
        doDecayItem(v)
        doSendMagicEffect(getThingPosition(cid), CONST_ME_MAGIC_GREEN)
        setPlayerExhaustion(cid, EXHAUSTION_TIME)
        doPlayerAddMana(cid, -MANA_COST)
        return true
    else
        doPlayerSendDefaultCancel(cid, RETURNVALUE_NOTPOSSIBLE)
        doSendMagicEffect(getThingPosition(cid), CONST_ME_POFF)
        return true
    end
end
