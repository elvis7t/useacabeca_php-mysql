<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Mismatch extends Page
{

    public static function GetListItems($request)
    {
    }

    public static function getMismatch($request)
    {
        $content = View::render('pages/mismatch', [
            'title' => 'Mismatch - Where opposistes attract!'
        ]);


        return parent::getPage('Mismatch - Use a Cabeça', $content);
    }
}
