local config = {
	effectonuse = 14, -- efeito que sai
	levelscrit = 100,  --- leveis que ter�o
	storagecrit = 45821 -- storage que ser� verificado
}
   
function onUse(cid, item, frompos, item2, topos)
	if getPlayerStorageValue(cid, config.storagecrit) < config.levelscrit then
		if doRemoveItem(item.uid, 1) then
			doSendMagicEffect(topos,config.effectonuse)
			doPlayerSendTextMessage(cid,22,"Voc� melhorou seu Critical Skill: ["..(getPlayerStorageValue(cid, config.storagecrit)+1).."/"..config.levelscrit.."].")
			setPlayerStorageValue(cid, config.storagecrit, getPlayerStorageValue(cid, config.storagecrit)+1)
		else
			doPlayerSendTextMessage(cid,25,"ERROR! Please contact the administrator.")
			return false
		end
		
	elseif getPlayerStorageValue(cid, config.storagecrit) >= config.levelscrit then
		doPlayerSendTextMessage(cid,22,"Voc� j� atingiu o n�vel MAX de Critical Skill.")
		return false
    end
	return true
end