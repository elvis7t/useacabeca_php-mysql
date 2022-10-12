<?php

namespace App\controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Abductions as EntityAbduction;


class Abduction extends Page
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
    /** 
     * Metodo resp por retornar o conteudo da Pagina
     * @return string 
     */
    public static function getAbductionsResp($request)
    {
         //DADOS DO POST
        $postVars = $request->getPostVars();
         //NOVA INSTANCIA DE ABDUÇÔES
        $obAbduction = new EntityAbduction;

        $content = View::render('pages/abduction/abduction_resp', [
            'titulo' => 'Aliens Abducted Me - Report an Abduction',
            'whenithappened' => $obAbduction->whenithappened = $postVars['whenithappened'],
            'howlong' => $obAbduction->howlong = $postVars['howlong'],
            'aliendescription' => $obAbduction->aliendescription = $postVars['aliendescription'],
            'fangspotted' => $obAbduction->fangspotted = $postVars['fangspotted'],
            'email' => $obAbduction->fangspotted = $postVars['email']
        ]);
        return parent::getPage('Form Abduction - Use a Cabeça', $content);
    }

    /** 
     * Metodo resp por retornar o conteudo da Pagina
     * @return string 
     */
    public static function getAbductionsForm()
    {
        $content = View::render('pages/abductions_form', [
            'titulo' => "Aliens Abducted Me - Report an Abduction:"
        ]);
        return parent::getPage('Form Abduction - Use a Cabeça', $content);
    }

    /**
     * Método responsável por cadastrar um depoimento
     * @param  Resquest
     * @return string
     */
    public static function InsertAbductionsForm($request)
    {
        //DADOS DO POST
        $postVars = $request->getPostVars();

        //NOVA INSTANCIA DE ABDUÇÔES
        $obAbduction = new EntityAbduction;
        $obAbduction->firstname = $postVars['firstname'];
        $obAbduction->lastname = $postVars['lastname'];
        $obAbduction->whenithappened = $postVars['whenithappened'];
        $obAbduction->howlong = $postVars['howlong'];
        $obAbduction->howmany = $postVars['howmany'];
        $obAbduction->aliendescription = $postVars['aliendescription'];
        $obAbduction->whattheydid = $postVars['whattheydid'];
        $obAbduction->fangspotted = $postVars['fangspotted'];
        $obAbduction->email = $postVars['email'];
        $obAbduction->other = $postVars['other'];
        $obAbduction->cadastrar();

        return self::getAbductionsResp($request);
    }
}
