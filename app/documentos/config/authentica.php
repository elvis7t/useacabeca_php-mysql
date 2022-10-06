<?php
$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));//strip_tags evit inserção de js na url
$setUrl =(empty($getUrl) ? 'test' : $getUrl);
$Url = explode('/', $setUrl );

$username = 'rock';
$password = 'roll';

if(!isset($_SERVER['PHP_AUTH_USER'])
 || !isset($_SERVER['PHP_AUTH_PW'])
 || ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password)){
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Guitar Wars"');
    exit ("<h2>Guitar Wars</h2>Desculpe, voce deve digitar uma senha valida para acessar esta pagina");
}
?>

<?php
require_once('menu.php');
?>