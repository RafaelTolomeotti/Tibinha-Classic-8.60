local combat = createCombatObject()
setCombatParam(combat, COMBAT_PARAM_TYPE, COMBAT_EARTHDAMAGE)
setCombatParam(combat, COMBAT_PARAM_EFFECT, CONST_ME_GREEN_RINGS)
setCombatParam(combat, COMBAT_PARAM_DISTANCEEFFECT, CONST_ANI_POISON)
setCombatParam(combat, COMBAT_PARAM_CREATEITEM, 1496)

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
	return doCombat(cid, combat, var)
end