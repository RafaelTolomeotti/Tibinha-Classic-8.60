local keywordHandler = KeywordHandler:new()
local npcHandler = NpcHandler:new(keywordHandler)
NpcSystem.parseParameters(npcHandler)
local talkState = {}

function onCreatureAppear(cid)	selfTurn(NORTH)      npcHandler:onCreatureAppear(cid)            end
function onCreatureDisappear(cid)           		npcHandler:onCreatureDisappear(cid)         end
function onCreatureSay(cid, type, msg)     		    npcHandler:onCreatureSay(cid, type, msg)    end
function onThink()	selfTurn(NORTH)	         		npcHandler:onThink()                        end
function onPlayerEndTrade(cid)              		npcHandler:onPlayerEndTrade(cid)            end
function onPlayerCloseChannel(cid)          		npcHandler:onPlayerCloseChannel(cid)        end

function creatureSayCallback(cid, type, msg)
    if not npcHandler:isFocused(cid) then
        return false
	end
	
	if msgcontains(msg, "info") then
		npcHandler:say({"Diferente das pedras encantadas, as pedras elementais s�o para mudar o elemento de sua wand/arma de n�vel mais elevado. ...",
						"Paladinos n�o podem usar as pedras elementais em sua arma pois j� s�o bem fortes e seu dano principal � f�sico. ...",
						"Para saber se sua wand/arma pode mudar de elemento, basta dar LOOK e ver a descri��o. ...",
						"No total s�o 6 elementos (physical n�o conta como dano elemental). ...",
						"Ice, Fire, Energy, Earth, Death e Holy. ...",
						"Quando entrar, voc� deve elimitar o BOSS e poder� vir uma pedra de elemento aleat�rio. ...",
						"A entrada � liberada para voc� fazer sempre que quiser. Digite: {entrar}! Eu cobro uma pequena taxa para a entrada."}, cid, 4000)
						npcHandler.topic[cid] = 0
	elseif msgcontains(msg, "entrar") or msgcontains(msg, "enter") then
		npcHandler:say("Voc� quer entrar na sala dos elementos por {50k}? Se sim, digite {yes}.",cid)
		npcHandler.topic[cid] = 1
	   
	--
	elseif msgcontains(msg, 'yes') then
        if npcHandler.topic[cid] == 1 then
			if getPlayerMoney(cid) >= 50000 then -- gold coin
				if doPlayerRemoveMoney(cid, 50000) then -- gold coin
					local ran = math.random(1, 2)
					if ran == 1 then
						npcHandler:say("Boa sorte!", cid)
						npcHandler.topic[cid] = 0 -- TOPIC vem primeiro antes de teleportar (evitar BUG)
						doTeleportThing(cid, {x = 44, y = 4096, z = 5})
					elseif ran == 2 then
						npcHandler:say("Boa sorte!", cid)
						npcHandler.topic[cid] = 0 -- TOPIC vem primeiro antes de teleportar (evitar BUG)
						doTeleportThing(cid, {x = 44, y = 4061, z = 5})
					end
				else
					doPlayerSendTextMessage(cid,25,"ERROR! Please contact the administrator.")
					npcHandler.topic[cid] = 0
				end
			else
				npcHandler:say("Voc� est� brincando comigo? Voc� n�o tem dinheiro.", cid)
				npcHandler.topic[cid] = 0
			end
		end
		
	elseif(msgcontains(msg, "no") and isInArray({1}, npcHandler.topic[cid])) then
		npcHandler:say("Ok then.", cid)
		npcHandler.topic[cid] = 0
	end
	return true
end

npcHandler:setMessage(MESSAGE_GREET, "Ol� |PLAYERNAME|! Para informa��es, digite: {info}. Para entrar, digite: {enter}.")
npcHandler:setMessage(MESSAGE_WALKAWAY, "Volte logo!")
npcHandler:setMessage(MESSAGE_FAREWELL, "Volte logo!")

keywordHandler:addKeyword({"name"}, StdModule.say, {npcHandler = npcHandler, text = "Eu sou o Master Elementalist"})


npcHandler:setCallback(CALLBACK_MESSAGE_DEFAULT, creatureSayCallback)
npcHandler:addModule(FocusModule:new())