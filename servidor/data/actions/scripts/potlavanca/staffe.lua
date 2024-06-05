local config = {
    money = 250000, -- Dinheiro que vai custar
    item = 12692, -- ID do item que vai vender
    count = 1, -- Quantidade de itens que serão vendidos
    charges = 1000, -- Quantidade de cargas do item vendido
}

function onUse(cid, item, fromPosition, itemEx, toPosition)
    local pos = getCreaturePosition(cid)

    if item.itemid == 1945 then
        if doPlayerRemoveMoney(cid, config.money) == TRUE then
            local newitem = doCreateItemEx(config.item, config.count)
            if newitem ~= LUA_ERROR then
                doItemSetAttribute(newitem, "charges", config.charges)
                doPlayerAddItemEx(cid, newitem, false)
                doPlayerSendTextMessage(cid, MESSAGE_STATUS_DEFAULT, "Você acaba de comprar um item com "..config.charges.." cargas.")
                doSendMagicEffect(pos, CONST_ME_MAGIC_BLUE)
            end
        else
            doPlayerSendTextMessage(cid, 22, "Você precisa de 250k para comprar!")
            doSendMagicEffect(pos, CONST_ME_POFF)
        end
    end
end