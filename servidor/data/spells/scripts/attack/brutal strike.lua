local combat = createCombatObject()
setCombatParam(combat, COMBAT_PARAM_TYPE, COMBAT_PHYSICALDAMAGE)
setCombatParam(combat, COMBAT_PARAM_BLOCKARMOR, true)
setCombatParam(combat, COMBAT_PARAM_EFFECT, CONST_ME_HITAREA)
setCombatParam(combat, COMBAT_PARAM_DISTANCEEFFECT, CONST_ANI_WEAPONTYPE)
setCombatParam(combat, COMBAT_PARAM_USECHARGES, true)

function onGetFormulaValues(cid, level, skill, attack, element, factor)
	local levelTotal, formula = level / 4, 0.0408
	local normal, elemental = -(skill * attack * formula + levelTotal), math.ceil((skill * element * formula + levelTotal))
	return normal, normal, -math.random(elemental, elemental)
end

setCombatCallback(combat, CALLBACK_PARAM_SKILLVALUE, "onGetFormulaValues")
function onCastSpell(cid, var)
	return doCombat(cid, combat, var)
end
