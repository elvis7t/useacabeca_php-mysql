<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\model\Entity\GuitarWars as EntityGuitarWars;

class GuitarWars extends Page
{
    /**
     * Método responsável por retornar uma lista
     * @return string
     **/
    public static function getListItens($request)
    {
        //CONEXÂO COM O BANCO
        require_once __DIR__ . '../../../Model/conf.php';
        //RESULTADOS DA PÀGINA
        $itens = '';
        //SELECIONA OS DADOS DA TABELA
        $sql = "SELECT * FROM guitarwars WHERE gw_aproved = 'a' ORDER BY gw_score DESC";
        //PROCESSA OS DADOS
        $results = mysqli_query($con, $sql);

        //RENDERIZA A LISTA
        while ($row = mysqli_fetch_array($results)) {
            $itens .= View::render('pages/hiscore/list', [
                'id' => $row['gw_id'],
                'date' => $row['gw_date'],
                'name' => $row['gw_name'],
                'score' => $row['gw_score'],
                'screenshot' => $row['gw_screenshot']
            ]);
        }
        return $itens;
    }
    /**
     * Método resmponsável por retorar o conteúdo da página
     * @return string     
     * */
    public static function getHiscore($request)
    {
        $content = View::render('pages/hiscores', [
            'list' => self::getListItens($request),
            'title' => 'Hiscores'
        ]);
        return parent::getPage('Guitar Wars - Use a Cabeça', $content);
    }
    /**
     * Método responsável por retornar o conteúdo da página do formulario
     * @return string
     * */
    public static function getFormHiscore($request)
    {
        $content = View::render('pages/form_hiscore', [
            'title' => 'Guitar Wars -  Add Your High Score'
        ]);
        return parent::getPage('Guitar Wars', $content);
    }

    /**
     * Método responsável por inserir no banco
     * @return string
     **/
    public static function InsertHiscore($request)
    {
        //Dados do Posts
        $postVars = $request->getPostVars();

        //NOVA INSTANCIA DE GUITARWARS
        $obGuitarWars = new EntityGuitarWars;
        $obGuitarWars->name = $postVars['name'];
        $obGuitarWars->score = $postVars['score'];
        $obGuitarWars->cadastrar();

        return self::getHiscore($request);
    }

    /**
     * Método responsável por retornar o conteúdo da página admin_guitar_wars
     * @return string
     * **/
    public static function getAdminHiscore($request)
    {
        $content = View::render('pages/admin_guitar_wars', [
            'list' => self::getListItems($request),
            'title' => 'Admin - Guitar Wars'
        ]);
        return parent::getPage('Admin-Guitar Wars - Use a Cabeça', $content);
    }
    /**
     * Método responsável por retornar uma lista
     * @return string
     **/
    public static function getListItems($request)
    {
        //CONEXÂO COM O BANCO
        require_once __DIR__ . '../../../Model/conf.php';
        //RESULTADOS DA PÀGINA
        $itens = '';
        //SELECIONA OS DADOS DA TABELA
        $sql = "SELECT * FROM guitarwars ORDER BY gw_score DESC";
        //PROCESSA OS DADOS
        $results = mysqli_query($con, $sql);

        //RENDERIZA A LISTA
        while ($row = mysqli_fetch_array($results)) {
            $itens .= View::render('pages/hiscore/lista', [
                'id' => $row['gw_id'],
                'date' => $row['gw_date'],
                'name' => $row['gw_name'],
                'score' => $row['gw_score'],
                'check' => $row['gw_aproved'] == 'a' ? "CHECKED" : "",
                'screenshot' => $row['gw_screenshot']
            ]);
        }
        return $itens;
    }

    /** 
     * Metodo resp por retornar o conteudo da Pagina
     * @return string 
     */
    public static function getModerarHiscore($request)
    {
        extract($_GET);
        require_once __DIR__ . '../../../Model/conf.php';
        //SELECIONA OS DADOS DA TABELA
        $sql = "SELECT * FROM guitarwars WHERE gw_id =$id";
        //PROCESSA OS DADOS
        $results = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($results)) {
            $content = View::render('pages/hiscore/moderar', [
                'titulo' => "Clints - View",
                'id'    => $row['gw_id'],
                'name' => $row['gw_name'],
                'date' => $row['gw_date'],
                'score' => $row['gw_score'],
                'screenshot' => $row['gw_screenshot'],
                'check' => $row['gw_aproved'] == 'n' ? "checked" : "",
                'check2' => $row['gw_aproved'] == 'a' ? "checked" : ""

            ]);
        }
        //RETORNA A VIEW DA PÀGINA
        return parent::getPage('Abduction - Use a Cabeça', $content);
    }

    /**
     * MEtodo responsável por editar os dados 
     * @return string
     * */
    public static function updateModerar($request){
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        // exit;
        extract($_GET);
        require_once __DIR__ . '../../../Model/conf.php';
        $sql = "UPDATE guitarwars SET gw_aproved = '".$_POST['confirm']."' WHERE gw_id = ".$_POST['id']." LIMIT 1";
        mysqli_query($con, $sql);

        $sql2 = "SELECT * FROM guitarwars WHERE gw_id =$id";
        //PROCESSA OS DADOS
        $results = mysqli_query($con, $sql2);

        while ($row = mysqli_fetch_array($results)) {
            $content = View::render('pages/hiscore/moderar', [
                'titulo' => "Clints - View",
                'id'    => $row['gw_id'],
                'name' => $row['gw_name'],
                'date' => $row['gw_date'],
                'score' => $row['gw_score'],
                'screenshot' => $row['gw_screenshot'],
                'check' => $row['gw_aproved'] == 'n' ? "checked" : "",
                'check2' => $row['gw_aproved'] == 'a' ? "checked" : ""

            ]);
        }
        return parent::getPage('Abduction - Use a Cabeça', $content);
    }
}
