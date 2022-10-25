<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\model\Entity\Mismatch as EntityMismatch;

class Mismatch extends Page
{
    /** 
     * Metodo responsável por obter a renderização dos itens da página
     * @param Request $request     
     * @return string 
     */

    private static function getUsers($request)
    {
        //CONEXÂO COM O BANCO
        require_once __DIR__ . '../../../Model/conf.php';
        //RESULTADOS DA PÀGINA
        $itens = '';
        //SELECIONA OS DADOS DA TABELA
        $sql = "SELECT * FROM mismatch_user";
        //PROCESSA OS DADOS
        $results = mysqli_query($con, $sql);

        //RENDERIZA A LISTA
        while ($row = mysqli_fetch_array($results)) {
            //VIEW DE DEPOIMENTOS
            $itens .= View::render('pages/mismatch/list', [
                'id' => $row['user_id'],
                'name' => $row['user_firstname'].$row['user_lastname'],
                'image' => $row['user_picture']
            ]);
        }
        //RETORNA AS LINHAS
        return $itens;
    }
    /**
     * Método responsável por retornar o conteúdo da página
     * @return string
     */

    public static function getMismatch($request)
    {
        $content = View::render('pages/mismatch', [
            'list' => self::getUsers($request),
            'title' => 'Mismatch - Where opposistes attract!'
        ]);


        return parent::getPage('Mismatch - Use a Cabeça', $content);
    }

    /**
     * Método responsável por retornar o conteúdo da página
     * @return string
     */

    public static function getFormMismatchUser($request)
    {
        $content = View::render('pages/form_mismatchuser', [
            'title' => 'Mismatch - Sign Up!'
        ]);


        return parent::getPage('Mismatch - Use a Cabeça', $content);
    }
    /**
     * Método responsável por cadastrar um novo usuário
     * @param string $usermane
     * @param string $password
     * @return boolean 
     */

    public static function insertMismatchUser($request)
    {
        //Dados do Posts para
        $postVars = $request->getPostVars();

        //NOVA INSTANCIA DE MismatchUser
        $obUser = new EntityMismatch;
        $obUser->username = $postVars['username'];
        $obUser->password = $postVars['password'];
        $obUser->Cadastrar();

        //RETORNA PAGINA 
        return self::getMismatch($request);
    }

    /**
     * Método responsável por retornar o conteúdo da página de usuario
     * @param string $id     
     * @return string
     */
    public static function getUser($request)
    {
        extract($_GET);
        require_once __DIR__ . '../../../Model/conf.php';
        //SELECIONA OS DADOS DA TABELA
        $sql = "SELECT * FROM mismatch_user WHERE user_id=$id";
        //PROCESSA OS DADOS
        $results = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($results)) {
            $content = View::render('pages/mismatch/viewprofile', [
                'title' => "Mismatch - View Profile",
                'id'    => $row['user_id'],
                'username'    => $row['user_name'],
                'firstname'    => $row['user_firstname'],
                'lastname'    => $row['user_lastname'],
                'gender'    => $row['user_gender'],
                'birdate'    => $row['user_birdate'],
                'city'    => $row['user_city'],
                'state'    => $row['user_state'],
                'picture'    => $row['user_picture'],
            ]);
        }
        return parent::getPage('Mismatch - Use a Cabeça', $content);
    }

    /**
     * Método responsável por retornar o conteúdo da página de usuario
     * @param string $id     
     * @return string
     */
    public static function getUserMismatch($request)
    {
        extract($_GET);
        require_once __DIR__ . '../../../Model/conf.php';
        //SELECIONA OS DADOS DA TABELA
        $sql = "SELECT * FROM mismatch_user WHERE user_id=$id";
        //PROCESSA OS DADOS
        $results = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($results)) {
            $content = View::render('pages/mismatch/editprofile', [
                'title' => "Mismatch - View Profile",
                'id'    => $row['user_id'],
                'username'    => $row['user_name'],
                'firstname'    => $row['user_firstname'],
                'lastname'    => $row['user_lastname'],
                'gender'    => $row['user_gender'],
                'birdate'    => $row['user_birdate'],
                'city'    => $row['user_city'],
                'state'    => $row['user_state'],
                'picture'    => $row['user_picture'],
                'check' => $row['user_gender'] == 'm' ? "checked" : "",
                'check2' => $row['user_gender'] == 'f' ? "checked" : ""
            ]);
        }
        return parent::getPage('Mismatch - Use a Cabeça', $content);
    }
    /**
     * MEtodo responsável por editar os dados 
     * @return string
     * */
    public static function setUser($request)
    {
        extract($_GET);
        $postVars = $request->getPostVars();   

        $obUser = new EntityMismatch;
        $obUser->id = $postVars['id'];
        $obUser->username = $postVars['username'];
        $obUser->lastname = $postVars['lastname'];
        $obUser->firstname = $postVars['firstname'];
        $obUser->gender = $postVars['gender'];
        $obUser->birdate = $postVars['birdate'];
        $obUser->city = $postVars['city'];
        $obUser->state = $postVars['state'];
        $obUser->picture = $postVars['picture'];
        
       
        $obUser->Editar();

        return self::getUserMismatch($request);
    }
}
