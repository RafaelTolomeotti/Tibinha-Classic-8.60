local positions = {
    {texto = " CHANCE " , pos= {x = 239, y = 116, z = 9}},
    {texto = " ~ 50% ~ " , pos = {x = 242, y = 116, z = 9}},
    {texto = " ~ 40% ~ " , pos = {x = 241, y = 116, z = 9}},
    {texto = " ~ 100% ~ " , pos = {x = 240, y = 116, z = 9}},
    {texto = " ~ 20% ~ " , pos = {x = 238, y = 116, z = 9}},
    {texto = " ~ 15% ~ " , pos = {x = 237, y = 116, z = 9}},
    {texto = " ~ 10% ~ " , pos = {x = 236, y = 116, z = 9}},
    {texto = "CRIT!", pos = {x = 2043, y = 2041, z = 6}}, -- TEXTO EM VERMELHO
	{texto = "POT/RUNE", pos = {x = 2046, y = 2043, z = 7}}, -- TEXTO EM VERMELHO {x = 2046, y = 2043, z = 7}
    {texto = "DODGE", pos = {x = 2044, y = 2041, z = 6}}, -- TEXTO EM AZUL
    {texto = "EXP", pos = {x = 2046, y = 2041, z = 6}}, -- TEXTO EM ROSA
    {texto = "ST REF", pos = {x = 2047, y = 2041, z = 6}}, -- TEXTO EM VERDE
    {texto = "FULL ST", pos = {x = 2048, y = 2041, z = 6}}, -- TEXTO EM LARANJA
	{texto = "Boosted DAY", pos = {x = 2044, y = 2040, z = 8}}, -- TEXTO EM LARANJA
    {texto = "CAVE", pos = {x = 2049, y = 2041, z = 6}}, -- TEXTO EM AMARELO
}

local colors = {
    TEXTCOLOR_RED, -- VERMELHO
    TEXTCOLOR_BLUE, -- AZUL
    TEXTCOLOR_PINK, -- ROSA
    TEXTCOLOR_GREEN, -- VERDE
    TEXTCOLOR_ORANGE, -- LARANJA
    TEXTCOLOR_YELLOW -- AMARELO
}

local effects = {
    CONST_ME_FIREWORK_YELLOW,
    CONST_ME_FIREWORK_RED,
    CONST_ME_FIREWORK_BLUE
}

function onThink(cid, interval, lastExecution)
    for _, pid in pairs(positions) do
        local t = getSpectators(pid.pos, 7, 5, false)
        if t then
            for _, cid in ipairs(t) do
                if isPlayer(cid) then
                    doSendAnimatedText(pid.pos, pid.texto, colors[math.random(1, #colors)])
                end
            end
        end
    end
    return true
end