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
        

        $content = View::render('pages/home', [
            'name' => 'Livro Use a Cabeça PHP & MYSQL'
        ]);
        // return 'Ola Mundo';
        return parent::getPage('Home - PRATICA', $content);
    }
}
