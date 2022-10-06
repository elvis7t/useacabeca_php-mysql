<?php
require __DIR__.'/../vendor/autoload.php';

use \App\Utils\View;
use \WilliamCosta\DotEnv\Environment;
// use \WilliamCosta\DatabaseManager\Database;

//CARREGA VARIÀVEIS DE AMBIENTE
Environment::load(__DIR__.'/../');

//DEFINE AS CONFIGURAÇÔES DE BANCO DE DADOS
// Database::config(
//        getenv('DB_HOST'),
//        getenv('DB_NAME'),
//        getenv('DB_USER'),
//        getenv('DB_PASS'),
//        getenv('DB_PORT')
// );
 
//DEFINE O VALOR PADÂO DE URL
define('URL',getenv('URL'));

//DEFINE O VALOR PADRÂO DAS VARIAVEIS
View::init([
       'URL' => URL
]);
