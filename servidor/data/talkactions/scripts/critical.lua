function onSay(cid, words, param)
if(not checkExhausted(cid, 666, 2)) then
	return true
end

	if param == "" then
		doPlayerPopupFYI(cid,"                                                        [+] Critical Skill [+]\n                                      # Critical melhorado para o servidor #\n\n\n                                                        .:: INFORMA��ES ::. \n\nO critical, ao ser ativado (30% de chance), aumenta o dano do seu personagem.\nO dano pode chegar at� +20% no n�vel de CRITICAL m�ximo.\nCada Skill de critical aumenta seu dano em +0.2%.\n\nVoc� pode comprar o Critical no NPC Event Seller ou Boss Seller.\nAo utilizar o item, voc� aumenta seu Critical Skill.\nVoc� pode melhorar seu SKILL at� o n�vel 100.\n\n\n Critical Skill: [".. getPlayerStorageValue(cid, 45821) .."/100].\n\n\n                                                        .::OBSERVA��O::.\n\nAt� o momento, o Critical funciona apenas em Players e no Training Dummy.\nEm breve estar� funcionando em todos os monstros.")
		return true
	end
	return true
end