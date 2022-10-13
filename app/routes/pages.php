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

//ROTA ELVIS STORE 
$obRota->get('/store', [
    function ($request) {
        return new Response(200, Pages\Store::getStore($request));
    }
]);

//ROTA PARA DELETAR EMAILS
$obRota->post('/store', [
    function ($request) {
        return new Response(200, Pages\Store::DeleteClient($request));
    }
]);

//ROTA CLIENTE ELVIS STORE
$obRota->get('/clint', [
    function ($request) {
        return new Response(200, Pages\Store::getClient($request));
    }
]);

//ROTA DE CADASTRO DE EMAILS
$obRota->get('/form_client', [
    function ($request) {
        return new Response(200, Pages\Store::getClientForm($request));
    }
]);

//ROTA DE CADASTRO DE EMAILS
$obRota->post('/form_client', [
    function ($request) {
        return new Response(200, Pages\Store::InsertClient($request));
    }
]);

//ROTA DE CADASTRO DE ENVIO DE EMAIL
$obRota->get('/form_sendemail', [
    function($request) {
        return new Response(200, Pages\Store::getClientFormAdd($request));
    }
]);

//ROTA DE CADASTRO DE ENVIO DE email_list
$obRota->post('/form_sendemail', [
    function($request){
        return new Response(200, Pages\Store::SendEmail($request));
    }
]);

//Rota Busca Emails
$obRota->get('/form_search', [
    function($request) {
        return new Response(200, Pages\Store::SearchEmail($request));
    }
]);

//ROTA DELETA Emails
$obRota->post('/form_search', [
    function($request){
        return new Response(200, Pages\Store::DeleteEmail($request));
    }
]);