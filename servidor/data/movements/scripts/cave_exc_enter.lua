function onStepIn(cid, item, position, fromPosition)
if (not isPlayer(cid)) then
	return false
end

	if isPlayer(cid) then
		if getPlayerStorageValue(cid, 45316) <= 0 then
			setPlayerStorageValue(cid, 45316, 1)
			doPlayerPopupFYI(cid,"                                                                 [+] Cave Exclusiva [+]\n                                             # �rea totalmente exclusiva do servidor #\n\n- TUTORIAL -\n Os monstros da Cave Exclusiva lhe oferecem +20% EXP e LOOT.\n Para entrar, basta clicar(dar USE) na porta. Vai consumir 1 Cave Exclusiva(ITEM).\n Para sumonar os monstros, use a alavanca no centro da sala (cooldown de 15seg).\n Para sair da Cave Exclusiva, basta clicar(dar USE) na porta.\n Ap�s seu tempo esgotar, voc� ser� teleportado para o TEMPLO.\n Se morrer, voc� perder� items/xp normalmente.\n Se sair da Cave Exclusiva, poder� voltar se seu tempo ainda n�o tiver expirado.\n Se morrer dentro da Cave Exclusiva, poder� voltar se seu tempo ainda n�o tiver expirado.\n\n- COMANDOS -\n!cave quantidade (valor)\n  > Voc� pode escolher a quantidade de monstros. \n      M�nimo 1 e m�ximo 4. (Exemplo: !cave qtd 4)\n\n!cave tempo\n  > Mostra o tempo que voc� possui na Cave Exclusiva.\n\n\nFREE ACCOUNT = 60 minutos\nVIP ACCOUNT = 90 minutos")
		end
	end
	return true
end