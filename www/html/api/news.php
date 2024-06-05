<?php

$news = array();
$lang = "en";
if(isset($_GET['lang']))
	$lang = $_GET['lang'];


$news[] = array("title" => "Bem vindo Jogador", "text" => "Para cria uma account entre em: www.tibinha.com");

$news[] = array("title" => "Resumo do Update", 
	"text" => "Foi adicionado novo local de Hunt para o servidor mais precisamente Catacumbs para servidor estilo 8.60");
$news[] = array("title" => "Foto", "image" => base64_encode(file_get_contents("image.png")));

echo json_encode($news);

?>