local combat = createCombatObject()
setCombatParam(combat, COMBAT_PARAM_TYPE, COMBAT_ICEDAMAGE)
setCombatParam(combat, COMBAT_PARAM_EFFECT, CONST_ME_ICEATTACK)
setCombatParam(combat, COMBAT_PARAM_DISTANCEEFFECT, CONST_ANI_SMALLICE)
setCombatFormula(combat, COMBAT_FORMULA_LEVELMAGIC, -1, -10, -1, -20, 5, 5, 2.9, 3.4)

function onCastSpell(cid, var)
	return doCombat(cid, combat, var)
end
