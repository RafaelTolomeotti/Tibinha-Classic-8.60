local happyHour = getConfigValue("staminaRatingLimitTop")

function onUse(cid, item, fromPosition, itemEx, toPosition)
local staminaTime = getPlayerStamina(cid) - getConfigValue("staminaRatingLimitTop")
   
    if(getPlayerStamina(cid) >= happyHour) then
        doPlayerSendCancel(cid, "Voc� ainda tem ".. staminaTime .." minutos de stamina b�nus.")
		doSendMagicEffect(fromPosition, CONST_ME_POFF)
        return true
    end
	
    if doRemoveItem(item.uid) == true then
		doPlayerSetStamina(cid, 42 * 60)
		doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_ORANGE, "Voc� recarregou sua stamina ao m�ximo.")
		doSendMagicEffect(toPosition, CONST_ME_MAGIC_GREEN)
	end
    return true
end