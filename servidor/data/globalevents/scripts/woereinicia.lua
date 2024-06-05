dofile("./_woe.lua")
local config = woe_config
function onTime()
	if Woe.isTime() == true then
		doBroadcastMessage("War Castle was canceled...", config.bcType)
		setGlobalStorageValue(stor.WoeTime, 0)
		setGlobalStorageValue(stor.Started, 0)
		if isCreature(getThingFromPos(Castle.empePos).uid) == TRUE then
			doRemoveCreature(getThingFromPos(Castle.empePos).uid)
		end
		if getThingFromPos(Castle.desde).itemid > 0 then
			doRemoveItem(getThingFromPos(Castle.desde).uid)
		end
		Woe.removePre()
		Woe.removePortals()
	end
	return true
end