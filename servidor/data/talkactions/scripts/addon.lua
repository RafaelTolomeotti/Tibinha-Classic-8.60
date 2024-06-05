function onSay(cid, words, param)

local femaleOutfits = { ["golden"]={329} }

local maleOutfits = { ["golden"]={328} }

local msg = {"Digite o nome correto!", "Voce não possui Golden Doll!", "Bad param!", "Você recebeu seu addons!"}

local param = string.lower(param)

if (not isPremium(cid)) then

doPlayerSendCancel(cid, "Você nao tem premium account.")

return TRUE

end

if(getPlayerItemCount(cid, 10127) > 0) then

if(param ~= "" and maleOutfits[param] and femaleOutfits[param]) then

doPlayerRemoveItem(cid, 10127, 1)

doPlayerSendTextMessage(cid, MESSAGE_INFO_DESCR, msg[4])

doSendMagicEffect(getCreaturePosition(cid), CONST_ME_GIFT_WRAPS)

if(getPlayerSex(cid) == 0)then

doPlayerAddOutfit(cid, femaleOutfits[param][1], 3)

else

doPlayerAddOutfit(cid, maleOutfits[param][1], 3)

end

else

doPlayerSendTextMessage(cid, MESSAGE_INFO_DESCR, msg[1])

end

else

doPlayerSendTextMessage(cid, MESSAGE_INFO_DESCR, msg[2])

end

end