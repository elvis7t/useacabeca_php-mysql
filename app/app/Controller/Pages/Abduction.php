<?php

namespace App\controller\Pages;

use \App\Utils\View;

class Abduction extends Page
{
    /** 
     * Metodo resp por retornar o conteudo da Pagina
     * @return string 
     */
    public static function getAbduction($request)
    {
        extract($_GET);
        //CONEXÂO COM O BANCO
        require_once __DIR__ . '../../../Model/conf.php';
        //SELECIONA OS DADOS DA TABELA
        $sql = "SELECT * FROM aliens_abduction WHERE aa_id =$var";
        //PROCESSA OS DADOS
        $results = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($results)) {
            $content = View::render('pages/abduction/abduction', [
                'titulo' => "Aliens Abducted Me - Repost an Abduction",
                'whenithappened' => $row['aa_whenithappened'],
                'howlong' => $row['aa_howlong'],
                'howmany' => $row['aa_howmany'],
                'aliendescription' => $row['aa_aliendescription'],
                'whattheydid' => $row['aa_whattheydid'],
                'fangspotted' => $row['aa_fangspotted'],
                'other' => $row['aa_other'],
                'email' => $row['aa_email']
            ]);
        }
        //RETORNA A VIEW DA PÀGINA
        return parent::getPage('Abduction - Use a Cabeça', $content);
    }
}
