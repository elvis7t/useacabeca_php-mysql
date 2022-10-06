<?php

namespace App\controller\Pages;

use \App\Utils\View;
use \App\model\Entity\Organization;

class Abductions_list extends Page
{

    /** 
     * Metodo resp por retornar o conteudo da Pagina
     * @return string 
     */

    public static function getAbductionsList()
    {
        $obOrganization = new Organization;

        $content = View::render('pages/abductions_list', [
            'name' => $obOrganization->name            
        ]);
        // return 'Ola Mundo';
        return parent::getPage('Home - PRATICA', $content);
    }
}
