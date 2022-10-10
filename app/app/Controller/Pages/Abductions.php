<?php

namespace App\controller\Pages;

use \App\Utils\View;

class Abductions extends Page
{
    /** 
     * Metodo resp por retornar o conteudo da Pagina
     * @return string 
     */
    public static function getAbductionItems()
    {
        //CONEXÂO COM O BANCO
        require_once __DIR__ . '../../../Model/conf.php';
        //RESULTADOS DA PÀGINA
        $itens = '';
        //SELECIONA OS DADOS DA TABELA
        $sql = "SELECT * FROM aliens_abduction";
        //PROCESSA OS DADOS
        $results = mysqli_query($con, $sql);

        //RENDERIZA A LISTA
        while ($row = mysqli_fetch_array($results)) {
            //VIEW DE DEPOIMENTOS
            $itens .= View::render('pages/abduction/list', [
                'id' => $row['aa_id'],
                'name' => $row['aa_firstname'],
                'lastname' => $row['aa_lastname'],
                'email' => $row['aa_email']
            ]);
        }
        //RETORNA AS LINHAS
        return $itens;
    }
    /** 
     * Metodo resp por retornar o conteudo da Pagina
     * @return string 
     */
    public static function getAbductions($request)
    {
        $content = View::render('pages/abductions', [
            'list' => self::getAbductionItems($request),
            'titulo' => "Reports of abductions by aliens"
        ]);
        //RETORNA A VIEW DA PÀGINA
        return parent::getPage('Abduction - Use a Cabeça', $content);
    }
}
