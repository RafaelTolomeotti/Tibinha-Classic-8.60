-- [( Script created by Teziik)] --

function onThink(interval, lastExecution)

MENSAGEM = {

"Quem curtir a pagina do FaceBook e marcar 3 amigos ganha 1kk ! Facebook.com/TibianhaMl",

"Curta a pagina do facebook.com/TibianhaMl . Para fica por dentro de todas as novidades que rola dentro do Ot com antecedência!",

"Bug’s, dúvidas e sugestões, utilizem o HELP caso não tenha resposta abra um ticket diretamente no site!",

"Entre no nosso grupo do Whatsapp: https://chat.whatsapp.com/BI0BtqtXJ440Y4zJprH8mp",

"Todas suas curtidas e compartilhada do FaceBook ajuda muito o crescimento do servidor!",

}

doBroadcastMessage(MENSAGEM[math.random(1,#MENSAGEM)],20)

return TRUE

end