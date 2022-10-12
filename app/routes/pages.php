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

//ROTA FORM DE Elvis Store
$obRota->get('/store', [
    function ($request) {
        return new Response(200, Pages\Store::getStore($request));
    }
]);
