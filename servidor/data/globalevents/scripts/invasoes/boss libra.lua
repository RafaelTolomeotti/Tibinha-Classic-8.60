local position = {x=1900, y=2054, z=4} -- local do monstro que será sumonado
local name = "Libra" -- monstro que será sumonado

local kick = {x=2052, y=2051, z=7}
local from = {x=1894, y=2051, z=4}
local to = {x=1909, y=2063, z=4}

local function doRemoveMonstersInArea(from, to)
	for x = from.x, to.x do
		for y = from.y, to.y do
			local pos = {x=x, y=y, z = from.z}
			local m = getTopCreature(pos).uid
			if m > 0 and isMonster(m) then
				doRemoveCreature(m)
			end
		end
	end
end

local function getPlayers(from, to)
    local t = {}
    for x = from.x, to.x do
        for y = from.y, to.y do
            local pos = {x = x, y = y, z = from.z}
            local creatures = getTileInfo(pos).creatures
            if creatures ~= 0 then
                pos.stackpos = 1
                local c = getThingfromPos(pos)
                while c.uid ~= 0 do
                    if c.itemid == 1 and c.type == 1 then
                        table.insert(t, c.uid)
                        if #t == creatures then
                            break
                        end
                    end
                    pos.stackpos = pos.stackpos + 1
                    c = getThingfromPos(pos)
                end
            end
        end
    end
    return t
end
		
function onThink(interval)
	if math.random(1, 100) <= 20 then
		local t = getPlayers(from, to)
		if #t > 0 then -- returns the amount of players
			for i = 1, #t do -- looping all the players in area
				doTeleportThing(t[i], kick) -- teleport them to a place
				doPlayerSendTextMessage(t[i], MESSAGE_STATUS_CONSOLE_ORANGE, "Você não pode ficar na sala do BOSS quando ele nasce.")
			end
        end
		
		doCleanTile(position)
		doRemoveMonstersInArea(from, to)
		doSummonCreature(name, position, true, true)
		doBroadcastMessage("[LIBRA] Boss na área Tower Ferumbras! Todos os jogadores VIPS e FREE podem tentar derrotá-lo.")
	end
	return true
end
