<?php
date_default_timezone_set('America/Sao_paulo');
define('DB_HOSTNAME','mysql');
define('DB_USERNAME','db_user');
define('DB_PASSWORD','db_user_pass');
define('DB_DATABASE','useacabeca'); 
define('DB_PREFIX',null);
define('DB_CHARSET','utf8');

$con = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE)or die(mysqli_connect_error($con));

// mysqli_close($con);
?>