<?php

namespace App\controller\Pages;

use \App\Utils\View;

class Store extends Page
{
     /** 
     * Metodo resp por retornar o conteudo da Pagina
     * @return string 
     */
    public static function getStoreItems()
    {
        //CONEXÂO COM O BANCO
        require_once __DIR__ . '../../../Model/conf.php';
        //RESULTADOS DA PÀGINA
        $itens = '';
        //SELECIONA OS DADOS DA TABELA
        $sql = "SELECT * FROM email_list";
        //PROCESSA OS DADOS
        $results = mysqli_query($con, $sql);

        //RENDERIZA A LISTA
        while ($row = mysqli_fetch_array($results)) {
            //VIEW DE DEPOIMENTOS
            $itens .= View::render('pages/store/list', [
                'id' => $row['elist_id'],
                'name' => $row['elist_firstname'],
                'lastname' => $row['elist_lastname'],
                'email' => $row['elist_email']
            ]);
        }
        //RETORNA AS LINHAS
        return $itens;
    }
     /** 
     * Metodo resp por retornar o conteudo da Pagina
     * @return string 
     */
    public static function getStore($request)
    {
        $content = View::render('pages/store', [
            'list' => self::getStoreItems($request),
            'titulo' => "Por favor selecione os endereços de email a ",
            'subtitulo' => "serem apagados e clique em Remover"
        ]);
        //RETORNA A VIEW DA PÀGINA
        return parent::getPage('Store - Use a Cabeça', $content);
    }
}
