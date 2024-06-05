local config = {
   pos = {x=2070, y=1862, z=9},
   stoneid = 1353,
   time = 30 -- time in seconds to remove the stone
}


function onUse(cid, item, fromPosition, itemEx, toPosition)
     local stone = getTileItemById(config.pos,config.stoneid).uid
     if(stone > 0) then
       doRemoveItem(stone,1)
  doPlayerSendTextMessage(cid,22,"A pedra foi removida")
       doSendMagicEffect(config.pos, CONST_ME_MAGIC_RED)
       addEvent(doCreateItem, config.time * 1000, config.stoneid, 1, config.pos)
       doTransformItem(item.uid, item.itemid == 1945 and 1946 or 1945)
     else
       doPlayerSendCancel(cid, "A pedra ja foi removida, aguarde 30 segundos para abrir novamente.")
     end
     return true
end