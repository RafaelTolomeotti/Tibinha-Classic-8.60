local config = {
	effectonuse = 14, -- efeito que sai
	levelsdodge = 100,  --- leveis que ter�o
	storagedodge = 45820 -- storage que ser� verificado
}
   
function onUse(cid, item, frompos, item2, topos)
    if getPlayerStorageValue(cid, config.storagedodge) < config.levelsdodge then
		if doRemoveItem(item.uid, 1) then
			doSendMagicEffect(topos,config.effectonuse)
			doPlayerSendTextMessage(cid,22,"Voc� melhorou seu Dodge Skill: ["..(getPlayerStorageValue(cid, config.storagedodge)+1).."/100].")
			setPlayerStorageValue(cid, config.storagedodge, getPlayerStorageValue(cid, config.storagedodge)+1)
		else
			doPlayerSendTextMessage(cid,25,"ERROR! Please contact the administrator.")
			return false
		end
		
	elseif getPlayerStorageValue(cid, config.storagedodge) >= config.levelsdodge then
		doPlayerSendTextMessage(cid,22,"Voc� j� atingiu o n�vel MAX de Dodge Skill.")
		return false
	end
	return true
end