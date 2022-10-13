<?php

namespace App\controller\Pages;

use \App\Utils\View;
use \App\model\Entity\Stores as EntityClient;


class Store extends Page
{
    /**
     * Metodo resp por retornar o conteudo da Pagina
     * @return string
     */
    public static function getClientList()
    {
        //CONEXÂO COM O BANCO
        require_once __DIR__ . '../../../Model/conf.php';
        //RESULTADOS DA PÀGINA
        $itens = '';
        //SELECIONA OS DADOS DA TABELA
        $sql = "SELECT * FROM elvis_store";
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
            'list' => self::getClientList($request),
            'titulo' => " Please select email addresses to ",
            'subtitulo' => "be deleted and click Remove"
        ]);
        //RETORNA A VIEW DA PÀGINA
        return parent::getPage('Store - Use a Cabeça', $content);
    }
    /** 
     * Metodo resp por retornar o conteudo da Pagina
     * @return string 
     */
    public static function getClient($request)
    {
        extract($_GET);
        require_once __DIR__ . '../../../Model/conf.php';
        //SELECIONA OS DADOS DA TABELA
        $sql = "SELECT * FROM elvis_store WHERE elist_id =$id";
        //PROCESSA OS DADOS
        $results = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($results)) {
            $content = View::render('pages/store/clint', [
                'titulo' => "Clints - View",
                'name' => $row['elist_firstname'],
                'lastname' => $row['elist_lastname'],
                'email' => $row['elist_email']
            ]);
        }
        //RETORNA A VIEW DA PÀGINA
        return parent::getPage('Abduction - Use a Cabeça', $content);
    }
    /** 
     * Metodo resp por retornar o conteudo da Pagina de Formulário
     * @return string 
     */

    public static function getClientForm()
    {
        $content = View::render('pages/form_clint', [
            'title' => 'Clint form Add'
        ]);
        return parent::getPage('Form Client - Use a Cabeça', $content);
    }
    /**
     * Método responsável por cadastrar um depoimento
     * @param  Resquest
     * @return string
     */
    public static function InsertClient($request)
    {
        $postVars = $request->getPostVars();
        $obStore = new EntityClient;
        $obStore->firstname = $postVars['firstname'];
        $obStore->lastname = $postVars['lastname'];
        $obStore->email = $postVars['email'];
        $obStore->cadastrar();

        return self::getStore($request);
    }
    /**
     * Método responsável por deletar clientes selecionados
     * @param  Resquest     
     */
    public static function DeleteClient($request)
    {

        foreach ($_POST['todelete'] as $deleteId) {
            require_once __DIR__ . '../../../Model/conf.php';

            $sql = "DELETE FROM elvis_store WHERE elist_id = $deleteId";
            mysqli_query($con, $sql) or die(mysqli_error($con));
        }
        return self::getStore($request);
    }
     /**
     * Método responsável por carregar o conteudo da pagina
     * @return string
     */

    public static function getClientFormAdd($request)
    {
        $content = View::render('pages/form_sendemail', [
            'title' => 'Send Emails for Clients'
        ]);
        return parent::getPage('Form Send Emails - Use a Cabeça', $content);
    }
     /**
     * Método responsável por enviar emails
     * @param  Resquest
     * @return string
     */
    public static function SendEmail($request){
             
            $content = View::render('pages/sendmails', [
                'list' => self::getClientList($request),
                'title'=> 'Send Emails for Clients',
                'subtitle'=> $_POST['subject'],
                'message'=> $_POST['message'],
            ]);
            // $content .= View::render('pages/store/sendmails', [               
            //     'name' => $row['elist_firstname'],
            //     'lastname' => $row['elist_lastname'],
            //     'email' => $row['elist_email']
            // ]);
       
        return parent::getPage('SendEmails - Use a Cabeça', $content);
        
    }
     /**
     * Método responsável por buscar email e deletar
     * @param  Resquest
     * @return string
     */
    public static function SearchEmail($request){
        $content = View::render('pages/form_search', [
            'title' => "Enter an email address to remove"
        ]);
        return parent::getPage('Search Emails - Use a Cabeça', $content);
    }
    /**
     * Método responsável por deletar emails
     * @param  Resquest
     * @return string
     */
    public static function DeleteEmail($request){
        require_once __DIR__ . '../../../Model/conf.php';
        $deleteId = trim($_POST['email']);
        
        $sql = "DELETE FROM elvis_store WHERE elist_email = '$deleteId'";
        // echo "<pre>";
        // print_r($sql);
        // echo "</pre>";
        // exit;
        mysqli_query($con, $sql);
        return self::SearchEmail($request);
    }
}
