<?php

namespace App\Model;

use \WilliamCosta\DotEnv\Environment;
//CARREGA VARIÀVEIS DE AMBIENTE
Environment::load(__DIR__.'/../../');


date_default_timezone_set('America/Sao_paulo');
//Abre Conexao com mysql
function conecta(){
	$link = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB_NAME'),) or die(mysqli_connect_error());
	mysqli_set_charset($link, 'utf8') or die(mysqli_error($link));
	return $link;
}

function desconecta($link){
	mysqli_close($link);
}

?>