local config = {

money = 25000000, -- Dinheiro que vai custar

item = 12707, -- ID do item que vai vender

count = 1, -- Quantidade

}


function onUse(cid, item, fromPosition, itemEx, toPosition)

pos = getCreaturePosition(cid)


if item.itemid == 1945 then

 if doPlayerRemoveMoney(cid, config.money) == TRUE then

doPlayerAddItem(cid, config.item, config.count)

doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Você acaba de comprar 1 "..config.count.." "..getItemNameById(config.item)..".")

doSendMagicEffect(pos, CONST_ME_MAGIC_BLUE)

 else

doPlayerSendTextMessage(cid,22,"Voce precisa de 25kk para comprar!")

doSendMagicEffect(pos, CONST_ME_POFF)

end

end


end