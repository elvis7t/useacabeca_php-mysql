<?php

namespace App\Utils;

class View
{
    /**
     * Variáveis padrão da view
     * @param array $vars     
     */
    private static $vars = [];
    /**
     * Metodo Responsavel por definir os dados iniciais da classe
     * @param array $vars     
     */
    public static function init($vars = [])
    {
        self::$vars = $vars;
    }
    /**
     * Metodo Responsavel por retornar o conteudo de uma view
     * @param string
     * @return string 
     */
    private static function getContentView($view)
    {
        $file = __DIR__ . '/../../resources/view/' . $view . '.php';
        return file_exists($file) ? file_get_contents($file) : '';
    }
    /**
     * Metodo Responsavel por retornar o conteudo renderizado de uma view
     * @param string $view
     * @param array $vars (string/numeric)
     * @return string 
     */
    public static function render($view, $vars = [])
    {
        //Conteudo da view renderizado
        $contentView = self::getContentView($view);

        //MERGE DE VARIAVEIS DA VIEW
        $vars = array_merge(self::$vars, $vars);

        //Retorna o Conteudo da view renderizado
        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);

        // echo "<pre>";
        // print_r($keys);
        // echo "</pre>";
        return str_replace($keys, array_values($vars), $contentView);
    }
}
