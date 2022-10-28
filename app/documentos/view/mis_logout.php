<?php
session_start();
if(isset($_SESSION['user_id'])){
    $_SESSION = array();
    if(isset($_COKIE[session_name()])){
        setcookie (session_name(),'',time()-3600);
    }
    // setcookie('user_id', time()-3600);
    // setcookie('user_name', time()-3600);
    session_destroy();
}
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/mis_index.php';

header('Location:'.$home_url);
?>