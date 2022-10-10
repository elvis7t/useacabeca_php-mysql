<?php

namespace App\controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Abductions as EntityAbduction;

class Abductions_form extends Page
{
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
