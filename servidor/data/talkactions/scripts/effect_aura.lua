function onSay(cid, words, param)
if(not checkExhausted(cid, 666, 2)) then
	return true
end

	if param == "" then
		if getPlayerStorageValue(cid, 25950) >= 1 then
			doPlayerPopupFYI(cid,"                                                          [+] Aura System [+]\n                                           # Aura Exclusiva para o servidor #\n\n\n                                                              .:: COMANDOS ::.\n\n !aura on -> Ativa o efeito da AURA.\n !aura off -> Desativa o efeito da AURA. (o Regen Hp/Mp continua funcionando)\n\n !aura 1 -> Ativa o efeito da AURA n� 1.\n !aura 2 -> Ativa o efeito da AURA n� 2.\n !aura 3 -> Ativa o efeito da AURA n� 3.\n... E assim sucessivamente ...\nPara utilizar a aura n� 2 em diante, � necess�rio compra-l� em nosso Shop.\n\n\n                                                         .:: COMANDOS VIP ::. \n\n !aura vip 1 -> Efeito exclusivo para jogadores VIP.\n !aura vip 2 -> Efeito exclusivo para jogadores VIP.\n\n\n                                                      .:: AURA EXCLUSIVA ::. \n\n Esta aura s� pode ser adquirida no pacote de fundador!\n !aura exc -> Efeito exclusivo para quem obteve o pacote de fundador.")
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Voc� n�o possui AURA.")
		end
		
    elseif param == "on" then
		if getPlayerStorageValue(cid, 25950) >= 1 then
			if getPlayerStorageValue(cid, 25951) >= 1 then
				setPlayerStorageValue(cid, 25951, 0)
				doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Efeito Aura: ON  -  Voc� ativou o efeito que aparece em seu personagem.")
			else
				doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "O efeito de sua AURA j� est� ativado.")
			end
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Voc� n�o possui AURA.")
		end
		
    elseif param == "off" then
		if getPlayerStorageValue(cid, 25950) >= 1 then
			if getPlayerStorageValue(cid, 25951) <= 0 then
				setPlayerStorageValue(cid, 25951, 1)
				doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Efeito Aura: OFF  -  Voc� desativou o efeito que aparece em seu personagem. A cura da AURA permanece ativa.")
			else
				doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "O efeito de sua AURA j� est� desativado.")
			end
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Voc� n�o possui AURA.")
		end
		
	elseif param == "1" then
		if getPlayerStorageValue(cid, 25950) >= 1 then
			if getPlayerStorageValue(cid, 25952) ~= 0 then
				setPlayerStorageValue(cid, 25952, 0)
				doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Efeito Aura: HEARTS  -  Voc� mudou o efeito de sua AURA para HEARTS.")
			else
				doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "O efeito HEARTS j� est� ativado.")
			end
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Voc� n�o possui AURA.")
		end	
		
	elseif param == "vip 1" then
		if isPremium(cid) then
			if getPlayerStorageValue(cid, 25950) >= 1 then
				if getPlayerStorageValue(cid, 25952) ~= 1 then
					setPlayerStorageValue(cid, 25952, 1)
					doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Efeito Aura: SKULL  -  Voc� mudou o efeito de sua AURA para SKULL.")
				else
					doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "O efeito SKULL j� est� ativado.")
				end
			else
				doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Voc� n�o possui AURA.")
			end
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "AURA exclusiva apenas para jogadores VIP. Adquira VIP para aproveitar esta Aura.")
		end
		
	elseif param == "vip 2" then
		if isPremium(cid) then
			if getPlayerStorageValue(cid, 25950) >= 1 then
				if getPlayerStorageValue(cid, 25952) ~= 2 then
					setPlayerStorageValue(cid, 25952, 2)
					doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Efeito Aura: BATS  -  Voc� mudou o efeito de sua AURA para BATS.")
				else
					doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "O efeito BATS j� est� ativado.")
				end
			else
				doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Voc� n�o possui AURA.")
			end
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "AURA exclusiva apenas para jogadores VIP. Adquira VIP para aproveitar esta Aura.")
		end
		
	elseif param == "2" then
		if getPlayerStorageValue(cid, 25950) >= 1 then
			if getPlayerStorageValue(cid, 25953) >= 1 then
				if getPlayerStorageValue(cid, 25952) ~= 3 then
					setPlayerStorageValue(cid, 25952, 3)
					doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Efeito Aura: PARTICLE  -  Voc� mudou o efeito de sua AURA para PARTICLE.")
				else
					doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "O efeito PARTICLE j� est� ativado.")
				end
			else
				doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Voc� n�o possui esta AURA. Compre ela no Shop.")
			end
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Voc� n�o possui AURA.")
		end
		
	elseif param == "3" then
		if getPlayerStorageValue(cid, 25950) >= 1 then
			if getPlayerStorageValue(cid, 25954) >= 1 then
				if getPlayerStorageValue(cid, 25952) ~= 4 then
					setPlayerStorageValue(cid, 25952, 4)
					doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Efeito Aura: STARS  -  Voc� mudou o efeito de sua AURA para STARS.")
				else
					doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "O efeito STARS j� est� ativado.")
				end
			else
				doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Voc� n�o possui esta AURA. Compre ela no Shop.")
			end
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Voc� n�o possui AURA.")
		end
		
	elseif param == "exc" then
		if getPlayerStorageValue(cid, 25950) >= 1 then
			if getPlayerStorageValue(cid, 25955) >= 1 then
				if getPlayerStorageValue(cid, 25952) ~= 5 then
					setPlayerStorageValue(cid, 25952, 5)
					doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Efeito Aura: ENERGY  -  Voc� mudou o efeito de sua AURA para ENERGY(Exclusiva).")
				else
					doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "O efeito ENERGY j� est� ativado.")
				end
			else
				doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Voc� n�o possui esta AURA. Aura Exclusiva s� pode ser adquirida no pacote exclusivo.")
			end
		else
			doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Voc� n�o possui AURA.")
		end	
    end
    return true
end