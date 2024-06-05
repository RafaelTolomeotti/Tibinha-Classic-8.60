monster_name_backup = 74812 -- nao mexer
monster_exp_backup = 74813 -- nao mexer
monster_loot_backup = 74814 -- nao mexer

config_boosted = {

    ["08:22:00"] = { -- Horario de cada dia que irá ocorrer a troca dos monstros
        pos_monster = {x=2044,y=2044,z=9, stackpos = 253}, -- a posição aonde ficara o monstro informando a quantidade de exp e loot
        time_effects = 2 -- tempo em segundos que ficará saindo os efeitos
    }
    
}

monsters_boosteds = { -- Configuracao dos monstros que irão ter exp e loot aumentados
	[1] = {monster_name = "Warlock", exp = 100, loot = 7},
	[2] = {monster_name = "Grim Reaper", exp = 100, loot = 5},
	[3] = {monster_name = "Lizard Chosen", exp = 100, loot = 15},
    [4] = {monster_name = "Midnight Asura", exp = 100, loot = 10},
	[5] = {monster_name = "Draken Elite", exp = 100, loot = 25},
	[6] = {monster_name = "Fury", exp = 100, loot = 12},
	[7] = {monster_name = "Nightmare", exp = 100, loot = 35},
	[8] = {monster_name = "Serpent Spawn", exp = 100, loot = 22},
	[9] = {monster_name = "Ghastly Dragon", exp = 100, loot = 30},
	[10] = {monster_name = "Guzzlemaw", exp = 100, loot = 15},
	[11] = {monster_name = "Frazzlemaw", exp = 100, loot = 30},
	[12] = {monster_name = "Dark Torturer", exp = 100, loot = 35},
	[13] = {monster_name = "Demon", exp = 100, loot = 40},
	[14] = {monster_name = "Hellspawn", exp = 100, loot = 40},
	[15] = {monster_name = "Dragon Lord", exp = 100, loot = 45},
	[16] = {monster_name = "Frost Dragon", exp = 100, loot = 40},
	[17] = {monster_name = "Behemoth", exp = 100, loot = 45},
	[18] = {monster_name = "Lady Jessyca", exp = 100, loot = 25},
	[19] = {monster_name = "Medusa", exp = 100, loot = 25},
    --[5] = {monster_name = "NOME DO MONSTRO", exp = "PORCENTAGEM DE EXP", loot = "PORCENTAGEM DO LOOT"},
}
function SummonCreature(time, monster)
    doSummonCreature(monster.monster_name, time.pos_monster)
    effectsMonster(time, monster)
end