UNREMOVABLE_FIELDS = {1497, 1498, 1499, 1505, 1506, 1507, 1508, 7465, 7466, 7467, 7468, 7469, 7470, 7471, 7472, 7473, 11098, 11099, 12720, 12721, 12722, 12725, 12851, 12852, 12853}

local function doRemoveField(cid, pos)
	local field = getTileItemByType(pos, ITEM_TYPE_MAGICFIELD)
	if(field.uid > 0 and not isInArray(UNREMOVABLE_FIELDS, field.itemid)) then
		doRemoveItem(field.uid)
		doSendMagicEffect(pos, CONST_ME_POFF)
		return true
	end

	doPlayerSendDefaultCancel(cid, RETURNVALUE_NOTPOSSIBLE)
	doSendMagicEffect(getThingPosition(cid), CONST_ME_POFF)
	return false
end

function onCastSpell(cid, var)
    local pos = variantToPosition(var)
	local block_area = {
	{{x=248,y=102,z=9}, {x=280,y=134,z=9}}, -- pos come�o e final da �rea
	{{x=408,y=39,z=9}, {x=539,y=99,z=9}}
	}
	
	for _, var in ipairs(block_area) do
		if isInRange(getCreaturePosition(cid), var[1], var[2]) then
			doPlayerSendCancel(cid, "Voc� n�o pode usar runas nesta �rea.")
			return false
		end
	end

	local pos = variantToPosition(var)
	if(pos.x == CONTAINER_POSITION) then
		pos = getThingPosition(cid)
	end

	if(pos.x ~= 0 and pos.y ~= 0) then
		return doRemoveField(cid, pos)
	end

	doPlayerSendDefaultCancel(cid, RETURNVALUE_NOTPOSSIBLE)
	doSendMagicEffect(getThingPosition(cid), CONST_ME_POFF)
	return false
end
