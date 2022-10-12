<?php

use \App\Http\Response;
use \App\controller\Pages;

//ROTA HOME
$obRota->get('/', [
    function () {
        return new Response(200, Pages\Home::getHome());
    }
]);

//ROTA LISTA DE ADBUÇOES
$obRota->get('/abductions', [
    function ($request) {
        return new Response(200, Pages\Abduction::getAbductions($request));
    }
]);

//ROTA FORM DE ADBUÇOES
$obRota->get('/abductions_resp', [
    function () {
        return new Response(200, Pages\Abduction::getAbductionsResp($request));
    }
]);
//ROTA FORM DE ADBUÇOES
$obRota->get('/abductions_form', [
    function () {
        return new Response(200, Pages\Abduction::getAbductionsForm());
    }
]);

//ROTA FORM DE ADBUÇOES
$obRota->post('/abductions_form', [
    function ($request) {
        return new Response(200, Pages\Abduction::InsertAbductionsForm($request));
    }
]);

//ROTA FORM DE ADBUÇOES
$obRota->get('/abduction', [
    function ($request) {
        return new Response(200, Pages\Abduction::getAbduction($request));
    }
]);

//ROTA DINAMICA
// $obRota->get('/pagina/{idPagina}/{acao}', [
//     function ($idPagina,$acao) {
//         return new Response(200, 'Página' . $idPagina.'-'.$acao);
//     }
// ]);

// //ROTA DEPOIMENTOS
// $obRota->get('/depoimentos', [
//     function ($request) {
//         return new Response(200, Pages\Testimony::getTestimonies($request));
//     }
// ]);
// //ROTA DEPOIMENTOS
// $obRota->post('/depoimentos', [
//     function ($request) {
//         return new Response(200, Pages\Testimony::insertTestimony($request));
//     }
// ]);