function onUse(cid, item, fromPosition, itemEx, toPosition)
local moneyneed = 100000 -- price to get new soft boots

local playermoney = getPlayerMoney(cid)

if playermoney >= moneyneed then

if doPlayerTakeItem(cid, 10022, 1) then

doPlayerAddItem(cid, 9933, 1)

doPlayerRemoveMoney(cid, moneyneed)

doSendMagicEffect(fromPosition,12)

else

doPlayerSendTextMessage(cid,20, "You don't have worn soft boots.")

end

else

doPlayerSendTextMessage(cid,20, "Sorry, but you need ".. moneyneed .." gold coins to get a new soft boots.")

end

end