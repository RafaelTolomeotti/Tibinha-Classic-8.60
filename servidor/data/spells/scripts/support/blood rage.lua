local combat = createCombatObject()
setCombatParam(combat, COMBAT_PARAM_EFFECT, CONST_ME_MAGIC_BLUE)
setCombatParam(combat, COMBAT_PARAM_AGGRESSIVE, false)

local condition = createConditionObject(CONDITION_ATTRIBUTES)
setConditionParam(condition, CONDITION_PARAM_TICKS, 10000)
setConditionParam(condition, CONDITION_PARAM_SKILL_MELEEPERCENT, 135)
setConditionParam(condition, CONDITION_PARAM_SKILL_SHIELDPERCENT, -100)
setConditionParam(condition, CONDITION_PARAM_BUFF, true)
setCombatCondition(combat, condition)

function onCastSpell(cid, var)
	return doCombat(cid, combat, var)
end
function onCastSpell(cid, var)
local block_area = {
{{x=11,y=50,z=10}, {x=137,y=140,z=13}}, -- pos começo e final da area [X: 2054] [Y: 2052] [Z: 6].
{{x=2040,y=2039,z=7}, {x=2058,y=2053,z=7}},
{{x=200,y=1019,z=7}, {x=300,y=1019,z=9}}
}
for _, var in ipairs(block_area) do
if isInRange(getCreaturePosition(cid), var[1], var[2]) then
doPlayerSendCancel(cid, "você não pode jogar magia nesta area.") return false
end
end
return doCombat(cid, combat, var)
end