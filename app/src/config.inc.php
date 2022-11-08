<?php
define('HOME', 'http://localhost:85');
$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));//strip_tags evit inserção de js na url
$setUrl =(empty($getUrl) ? 'index' : $getUrl);//Verifica a existencia
//empt = nçao to passando nenhum valor "Nao toa acessando nehuma pagina"
// então recebe o index, caso contrario aceito que gerurl
$Url = explode('/',$setUrl );// explodir as barras para criar indices
var_dump($Url);
// https://youtu.be/hCnBrQ1fekA
?>