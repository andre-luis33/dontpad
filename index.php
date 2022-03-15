<?php

require './src/backend/config.php';

$uri = $_GET['uri'];
if(!$uri) {
   $word = randomWord(3);

   echo "
      <h1>Olá, você está no dontpadd que não cai KAKAKAKA</h1>
      <p>Para começar a salvar anotações aleatórias, vá para <a href='{$word}'>/{$word}</a>, por exemplo</p>
   ";
   die;
}

$pageName = PAGES_PATH.$uri.'.txt';
if(file_exists($pageName)) {
   $content = file_get_contents($pageName);
} else {
   $content = "Bem vindo a página {$uri}";
   file_put_contents($pageName, $content);
}

?>

<link rel="stylesheet" href="./assets/style.css">

<textarea><?= $content ?></textarea>


<script src="./assets/jquery.js"></script>
<script src="./assets/script.js"></script>