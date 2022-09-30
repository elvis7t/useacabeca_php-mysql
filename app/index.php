<?php
header("location:view/index.php");
// echo "Home";

// echo $_SERVER['REQUEST_URI'];

// echo "<pre>";
// print_r($_GET);
// echo "</pre>"; exit;

// $rota =
// $getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));//strip_tags evit inserção de js na url
// $setUrl =(empty($getUrl) ? 'view/index' : $getUrl);//Verifica a existencia
// //empt = nçao to passando nenhum valor "Nao toa acessando nehuma pagina"
// // então recebe o index, caso contrario aceito que gerurl
// $Url = explode('/',$setUrl );// explodir as barras para criar indices
// // var_dump($Url);

// $Url[1] = (empty($Url[1]) ? null : $Url[1]);
// if(file_exists(DIRECTORY_SEPARATOR . '/' .$Url[0] . 'php' )):
//     require DIRECTORY_SEPARATOR . '/' .$Url[0] . 'php';
// elseif(file_exists(DIRECTORY_SEPARATOR . '/' . $Url[0] . '/' . $Url[1] . 'php')):  
//     require DIRECTORY_SEPARATOR . '/' . $Url[0] . '/' . $Url[1] . 'php';
// else:
//         require '404.php';  
// endif;
// var_dump($Url);

?>