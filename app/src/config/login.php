<?php
require_once '../model/conf.php';
if(!isset($_SERVER['PHP_AUTH_USER'])|| !isset($_SERVER['PHP_AUTH_PW'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Mismatch"');
    exit ('<h2>Mismatch</h2>Desculpe, voce deve digitar uma senha valida para acessar fazer login 
    e acessar essa pagina. Se você ainda não form um usuário registrado, por favor'.'
    <a href="signup.php">Cadastre-se</a>');

}
//obtem os dados de login digitados pelo usuario
$user_name = mysqli_real_escape_string($con, trim($_SERVER['PHP_AUTH_USER']));
$user_password = mysqli_real_escape_string($con, trim($_SERVER['PHP_AUTH_PW']));

//procura o nome e a senha no banco 
$sql = "SELECT user_id,  user_name FROM mismatch_user WHERE user_name ='".$user_name."'";
$data = mysqli_query($con, $sql);

if (mysqli_num_rows($data) == 1){
    //o login foi bem-sucedido, portanto, definir as variaveis de ID e nome do usuario
    $row = mysqli_fetch_array($data);
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
}else{
    //nome e senha estao incoretos
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Mismatch"');
    exit ("<h2>Mismatch</h2>Desculpe, voce deve digitar uma senha valida para acessar fazer login e acessar essa pagina");

}

//confirma o login bem sucedido
echo ('<p class="login"> voce esta logado como '.$user_name.'</p>');
