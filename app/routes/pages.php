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

//RORA HISCORES
$obRota->get('/hiscores', [
   function($request) {
       return new Response(200, Pages\GuitarWars::getHiscore($request));
   }
]);

//ROTA FORM HISCORES
$obRota->get('/form_hiscore', [
    function($request) {
        return new Response(200, Pages\GuitarWars::getFormHiscore($request));
    }
]);

//ROTA CADASTRA HISCORES
$obRota->post('/form_hiscore', [
    function($request) {
        return new Response(200, Pages\GuitarWars::InsertHiscore($request));
    }
]);

//ROTA ADMIN HISCORES
$obRota->get('/admin_guitar_wars', [
    function($request) {
        return new Response(200, Pages\GuitarWars::getAdminHiscore($request));
    }
]);

//ROTA ADMIN HISCORES
$obRota->get('/moderar', [
    function($request) {
        return new Response(200, Pages\GuitarWars::getModerarHiscore($request));
    }
]);

//ROTA MODERAR
$obRota->post('/moderar', [
    function($request) {
        return new Response(200, Pages\GuitarWars::updateModerar($request));
    }
]);

//ROTA Mismatch
$obRota->get('/mismatch', [
    function($request) {
        return new Response(200, Pages\Mismatch::getMismatch($request));
    }
]);

//ROTA ADD USER MISMATCH
$obRota->get('/form_mismatchuser', [
    function($request) {
        return new Response(200, Pages\Mismatch::getFormMismatchUser($request));
    }
]);
//ROTA POSTAR usuario
$obRota->post('/form_mismatchuser', [
    function($request) {
        return new Response(200, Pages\Mismatch::insertMismatchUser($request));
    }
]);
//RORA DE VER PERFIL DE USUARIOS
$obRota->get('/viewprofile', [
    function($request){
        return  new Response(200, Pages\Mismatch::getUser($request));
    }
]);
//RORA DE EDITARPERFIL DE USUARIOS
$obRota->get('/editprofile', [
    function($request){
        return  new Response(200, Pages\Mismatch::getUserMismatch($request));
    }
]);

// //RORA DE EDITARPERFIL DE USUARIOS
$obRota->post('/editprofile', [
    function($request){
        return  new Response(200, Pages\Mismatch::setUser($request));
    }
]);