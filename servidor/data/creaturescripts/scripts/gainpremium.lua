-- [( Created by Matheus for TibiaKing.com )] --
function onLogin(cid)
local days = 5 -- Dias de premium que o player irá ganhar.
if getGlobalStorageValue(getPlayerAccountId(cid)) <= 0 then
doPlayerAddPremiumDays(cid, days)
setGlobalStorageValue(getPlayerAccountId(cid), 1)
end
return TRUE
end