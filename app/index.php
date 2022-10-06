<?php

require __DIR__ . '/includes/app.php';

use \App\Http\Router;

// INICIA O ROUTER
$obRota = new Router(URL);

//INCLUI AS ROTAS DE PAGINAS
include __DIR__.'/routes/pages.php';

//IMPRIME O RESPONSE DA ROTA
$obRota->run()
       ->sendResponse();

