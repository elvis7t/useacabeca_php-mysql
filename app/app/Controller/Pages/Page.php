<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page{

    private static function getMenu() {
        return View::render('pages/menu');
    }

    private static function getFooter() {
        return View::render('pages/footer');
    }
 
 /** 
  * Metodo resp por retornar o conteudo da PAgina
  * @return string 
  */

    public static function getPage($title, $content){
        return View::render('pages/page', [
        'title' => $title,
        'menu' => self::getMenu(),
        'content' => $content,
        'footer' => self::getFooter()
        
        ]);
        // return 'Ola Mundo';
    }

}