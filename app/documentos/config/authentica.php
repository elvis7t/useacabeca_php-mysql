<?php
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