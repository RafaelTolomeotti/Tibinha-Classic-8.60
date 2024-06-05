local tp_mineracao = {x = 1848, y = 1871, z = 8}
local areasMineracao = {
[1] = {{x = 1803, y = 1861, z = 8}, {x = 1864, y = 1896, z = 8}},
[2] = {{x = 1799, y = 1864, z = 9}, {x = 1869, y = 1903, z = 9}},
[3] = {{x = 1802, y = 1876, z = 10}, {x = 1894, y = 1923, z = 10}}
}
local maxPlayersPerIP = 3 -- max players allowed per IP
function onStepIn(cid, item, position, fromPosition, toPosition)
    if (not isPlayer(cid)) then
        return false
    end

    local count = 0
    local playerIP = getPlayerIp(cid) -- don't need to get it every loop, should be constant
    for _, v in pairs(areasMineracao) do
        for _, pid in pairs(getPlayersOnline()) do
            if (getPlayerIp(pid) == playerIP and isInRange(getThingPos(pid), v[1], v[2])) then
                count = count + 1
            end
        end
    end

    if count >= maxPlayersPerIP then
        doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_ORANGE,"S� � permitido " .. maxPlayersPerIP .. " jogador por IP na minera��o.")
        doTeleportThing(cid, fromPosition, false)
        doSendMagicEffect(getCreaturePosition(cid), CONST_ME_TELEPORT)
        return true
    end
    
    doTeleportThing(cid, tp_mineracao, false)
    doSendMagicEffect(getCreaturePosition(cid), CONST_ME_TELEPORT)
    setPlayerStorageValue(cid, 45393, 1)
    return true
end