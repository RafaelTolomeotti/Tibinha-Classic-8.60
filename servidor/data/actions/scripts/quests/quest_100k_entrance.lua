local pos = {x = 1990,y = 2091,z = 9} -- Posi��o para onde os players v�o ser teleportados!!
local storage = 45109 -- Storage pode ser qualquer numero.

function onUse(cid, item, fromPosition, itemEx, toPosition)

	if getPlayerStorageValue(cid, storage) < 1 and getPlayerLevel(cid) >= 100 then
		doPlayerSendTextMessage(cid, MESSAGE_INFO_DESCR, "Voc� foi teleportado!")
		doTeleportThing(cid, pos)
		doSendMagicEffect(getThingPos(cid), 2)
	elseif getPlayerLevel(cid) < 100 then
		doPlayerSendTextMessage(cid, MESSAGE_INFO_DESCR, "Voc� precisa ser level 100.")
	else
		doPlayerSendTextMessage(cid, MESSAGE_INFO_DESCR, "Voc� j� concluiu a quest.")
	end
	return true
end