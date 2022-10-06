<?php

namespace App\controller\Pages;

use \App\Utils\View;
use \App\model\Entity\Organization;

class Home extends Page
{

    /** 
     * Metodo resp por retornar o conteudo da home
     * @return string 
     */

    public static function getHome()
    {
        $obOrganization = new Organization;

        $content = View::render('pages/home', [
            'name' => $obOrganization->name            
        ]);
        // return 'Ola Mundo';
        return parent::getPage('Home - PRATICA', $content);
    }
}
