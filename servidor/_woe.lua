dofile("./var.woe")

local config = woe_config

fileStore = true

infoFile = 'tmp.woe'
infoLua = {}

Woe = {}
Woe.__index = Woe

function Woe.setup()
	db.executeQuery("DROP TABLE IF EXISTS `woe`;")
	db.executeQuery("CREATE TABLE `woe` (`id` INT( 11 ) NOT NULL AUTO_INCREMENT ,`started` INT( 11 ) NOT NULL ,`guild` INT( 11 ) NOT NULL ,`breaker` INT( 11 ) NOT NULL ,`time` INT( 11 ) NOT NULL ,PRIMARY KEY ( `id` ) ,UNIQUE (`id`)) ENGINE = MYISAM")
	doBroadcastMessage("DB Added [...]", config.bcType)
	if fileStore then
		local newFile = io.open(infoFile, "w")
		for _, i in ipairs({'started', 'guild', 'breaker', 'time'}) do
			newFile:write(i .. ' = 0 ;end;\n')
		end
		newFile:close()
	else
		db.executeQuery("DROP TABLE IF EXISTS `tmpwoe`;")
		db.executeQuery("CREATE TABLE `tmpwoe` (`started` INT( 11 ) NOT NULL ,`guild` INT( 11 ) NOT NULL ,`breaker` INT( 111 ) NOT NULL ,`time` INT( 1 ) NOT NULL) ENGINE = MYISAM ;")
		db.executeQuery("ALTER TABLE `tmpwoe` ADD `indexer` INT NOT NULL ")
		db.executeQuery("INSERT INTO `tmpwoe` (`started` ,`guild` ,`breaker` ,`time`, `indexer`)VALUES ('0', '0', '0', '0', '1');")
	end
end

function Woe.getInfo()
	if fileStore then
		local open = io.open(infoFile, "r")
		if open then
			for i in io.lines(infoFile) do 
				for v, k in ipairs({'started', 'guild', 'breaker', 'time'}) do
					if (i:find(k)) then
						n = i:match(k .. '.*')
						infoLua[v] = tonumber(n:sub(n:find('=') + 2, n:find(';end;') - 2))
					end
				end
			end
			open:close()
		end
	else
		for v, k in ipairs({'started', 'guild', 'breaker', 'time'}) do
			local tmp = db.getResult("SELECT " .. k .. " FROM `tmpwoe` WHERE `indexer` = '1';")
			infoLua[v] = tmp:getDataInt(k)
			tmp:free()
		end
	end
end

function Woe.updateInfo(tab)
	if fileStore then
		local open = io.open(infoFile, "w")
		if open then
			for k, i in ipairs({'started', 'guild', 'breaker', 'time'}) do
				open:write(i .. ' = ' .. tab[k] .. ' ;end;\n')
			end
			open:close()
		end
	else
		for v, k in ipairs({'started', 'guild', 'breaker', 'time'}) do
			db.executeQuery("UPDATE `tmpwoe` SET " .. k .. " =  " .. tab[v] .. " WHERE `indexer` = 1;")
		end
	end
end

function Woe.save()
	Woe.getInfo()
	db.executeQuery("INSERT INTO `woe` (`started`, `guild`, `breaker`, `time`) VALUES (" .. infoLua[1] .. ", " .. infoLua[2] .. ", " .. infoLua[3] .. ", " .. infoLua[4] .. ");")
	db.executeQuery("UPDATE `guilds` SET  `real_castle` = REPLACE(`real_castle`, 1, 0);")
	db.executeQuery("UPDATE `guilds` SET `real_castle` = 1 WHERE `id` = '" .. infoLua[2] .."';")
end

function Woe.getGuildName(id)
	local res = db.getResult("SELECT `name` FROM `guilds` WHERE `id` = " .. id .. ";")
	if (res:getID() ~= -1) then
		ret = res:getDataString('name')
		res:free()
	end
	return ret
end

function Woe.breakerName()
	Woe.getInfo()
	return infoLua[3] ~= 0 and getPlayerNameByGUID(infoLua[3]) or 'None'
end

function Woe.guildName()
	Woe.getInfo()
	return infoLua[2] ~= 0 and Woe.getGuildName(infoLua[2]) or 'Nones'
end

function Woe.startTime()
	Woe.getInfo()
	return os.date("%d %B %Y %X ", infoLua[1])
end

function Woe.breakTime()
	Woe.getInfo()
	return os.date("%d %B %Y %X ", infoLua[4])
end

function Woe.timeToEnd()
	Woe.getInfo()
	local myTable = {}
	for k, i in ipairs({"%M", "%S"}) do
		myTable[k] = os.date(i, os.difftime(os.time(), infoLua[1]))
	end
	return {mins = ((config.timeToEnd - 1) - myTable[1]), secs = (60 - myTable[2])}
end

function Woe.moveBack(cid, fromPosition, text)
	doTeleportThing(cid, fromPosition, TRUE)
	doPlayerSendCancel(cid, text)
end

function Woe.getGuildMembers(id, fromPos, toPos)
	local members = {}
	for _, i in ipairs(getPlayersOnline()) do
		if id == getPlayerGuildId(i) then
			if isInRange(getPlayerPosition(i), fromPos, toPos) then
				table.insert(members, i)
			end
		end
	end
	return members
end

function Woe.deco(text)
	for _, i in ipairs(Castle.decoraciones) do
		doItemSetAttribute(i, "description", text)
	end
end

function Woe.removePre()
	for _, i in ipairs(Castle.PreEmpes) do
		if (isCreature(getThingFromPos(i).uid) == true) then
			doRemoveCreature(getThingFromPos(i).uid)
		end
	end
end

function Woe.checkPre()
	local Count = 0
	for _, i in ipairs(Castle.PreEmpes) do
		if (isCreature(getThingFromPos(i).uid) == false) then
	--	if (isCreature(getThingFromPos(Castle.PreEmpes1).uid) == false) or (isCreature(getThingFromPos(Castle.PreEmpes2).uid) == false) then
			Count = Count + 1
		end
	end
	return (Count == #Castle.PreEmpes)
end

function Woe.isTime()
	return (getGlobalStorageValue(stor.WoeTime) == 1)
end

function Woe.isStarted()
	return (getGlobalStorageValue(stor.Started) == 1)
end

function Woe.isRegistered(cid)
	return (getPlayerStorageValue(cid, stor.register) == 1)
end

function Woe.isInCastle(cid)
	local myPos = getCreaturePosition(cid)
	if (myPos.x >= 3752 and myPos.x <= 3870) then
		if (myPos.y >= 2550 and myPos.y <= 2631) then
			if isInArray({6, 7, 8}, myPos.z) then
				return true
			end
		end
	end
	return false
end

function Woe.expulsar(fromPos, toPos)
local players_woe = {}
    for _, pid in ipairs(getPlayersOnline()) do
        if isInRange(getPlayerPosition(pid), fromPos, toPos) then
            table.insert(players_woe, pid)
        end
    end
   
	return players_woe
end

-- extras

function doSetItemActionId(uid, action)
	doItemSetAttribute(uid, "aid", action)
end

function exhaust(cid, storevalue, exhausttime)
-- Exhaustion function by Alreth, v1.1 2006-06-24 01:31
-- Returns 1 if not exhausted and 0 if exhausted
    newExhaust = os.time()
    oldExhaust = getPlayerStorageValue(cid, storevalue)
    if (oldExhaust == nil or oldExhaust < 0) then
        oldExhaust = 0
    end
    if (exhausttime == nil or exhausttime < 0) then
        exhausttime = 1
    end
    diffTime = os.difftime(newExhaust, oldExhaust)
    if (diffTime >= exhausttime or diffTime < 0) then
        setPlayerStorageValue(cid, storevalue, newExhaust) 
        return 1
    else
        return 0
    end
end

--new
--guard_pos = 
--	{
--		{x = 55, y = 31, z = 5},
--		{x = 55, y = 30, z = 5},
--		{x = 55, y = 29, z = 5},
--		{x = 55, y = 28, z = 5},
--		{x = 55, y = 27, z = 5},
--		{x = 55, y = 26, z = 5},
--		{x = 55, y = 25, z = 5}
--	}
	
function Woe.check()
	for storage = 24504, 24511 do
		local pid = getGlobalStorageValue(storage)
		if isCreature(pid) then
			return false
		end
	end
	return true
end

--function Woe.summon()
--	for k, i in ipairs(guard_pos) do
--		local pid = doSummonCreature("guard", i)
--		setGlobalStorageValue(24503 + k, pid)
--	end
--end

function Woe.remove()
	for storage = 24504, 24511 do
		local pid = getGlobalStorageValue(storage)
		if isCreature(pid) then
			doRemoveCreature(pid)
		end
	end
end