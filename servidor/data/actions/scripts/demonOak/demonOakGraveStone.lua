function onUse(cid, item, fromPosition, itemEx, toPosition)
	if not isPlayerPzLocked(cid) then
		covaDemonOak(cid)
	else
		return doPlayerSendCancel(cid, "Voc� n�o pode estar com PZ Bloked.")
	end
	return true
end