<?php
if ( isset( $_POST['submit'] ) ) {
$names=$_POST["names"];
$url = 'https://madeinjapan.com.br/escreva-seu-nome-em-japones/?romaji='.$names;
echo $url;
?>
