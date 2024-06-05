local keywordHandler = KeywordHandler:new()
local npcHandler = NpcHandler:new(keywordHandler)
NpcSystem.parseParameters(npcHandler)
local talkState = {}

function onCreatureAppear(cid)	selfTurn(SOUTH)     npcHandler:onCreatureAppear(cid)            end
function onCreatureDisappear(cid)           		npcHandler:onCreatureDisappear(cid)         end
function onCreatureSay(cid, type, msg)     		    npcHandler:onCreatureSay(cid, type, msg)    end
function onThink()   selfTurn(SOUTH)           		npcHandler:onThink()                        end
function onPlayerEndTrade(cid)              		npcHandler:onPlayerEndTrade(cid)            end
function onPlayerCloseChannel(cid)          		npcHandler:onPlayerCloseChannel(cid)        end


function creatureSayCallback(cid, type, msg)
	if not npcHandler:isFocused(cid) then
		return false
	end
	
	if msgcontains(msg, "time") then
	   local time = getTibiaTime()
	   npcHandler:say("Agora s�o: ".. time.hours ..":".. time.minutes ..".", cid)
	   npcHandler.topic[cid] = 0
	
	elseif msgcontains(msg, "pick") then
		npcHandler:say("Posso te vender a Pick por apenas {100} golds. Voc� est� interessado? Se sim, diga {yes}.", cid)
	    npcHandler.topic[cid] = 1
		
-----------------------------------------------------------------------------------

	elseif msgcontains(msg, "yes") or msgcontains(msg, "sim") then
		if npcHandler.topic[cid] == 1 then	
			if getPlayerMoney(cid) >= 100 then -- gold coin
				if doPlayerRemoveMoney(cid, 100) then -- gold coin
					npcHandler:say("Vamos l� minerador, MINERE...", cid)
					doPlayerAddItem(cid, 2553, 1) -- advanced pick
					npcHandler.topic[cid] = 0
				else
					doPlayerSendTextMessage(cid,25,"ERROR! Please contact the administrator.")
					npcHandler.topic[cid] = 0
				end
			else
				npcHandler:say("Oh no, voc� n�o tem dinheiro.", cid)
				npcHandler.topic[cid] = 0
			end	
		end

	elseif(msgcontains(msg, "no") and isInArray({1}, npcHandler.topic[cid])) then
		npcHandler:say("Ok then.", cid)
		npcHandler.topic[cid] = 0

	end
	return true
end

npcHandler:setMessage(MESSAGE_GREET, "Hiho, Nezil ao seu servi�o, |PLAYERNAME|. Eu posso te vender uma {pick} para que possa minerar.")
npcHandler:setMessage(MESSAGE_WALKAWAY, "Volte logo!")
npcHandler:setMessage(MESSAGE_FAREWELL, "N�o esque�a da febre da minera��o!")

npcHandler:setCallback(CALLBACK_MESSAGE_DEFAULT, creatureSayCallback)
npcHandler:addModule(FocusModule:new())