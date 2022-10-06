<?php

namespace App\Http;

class Request
{

    /** 
     * Metodo HTTP da requisição
     * @var string 
     */

    private $httpMethod;

    /** 
     * URI da pagina ROTA
     * @var string 
     */

    private $uri;

    /** 
     * Parametros da URL recebido via ($_GET)
     * @var array 
     */

    private $queryParams = [];

    /** 
     * Variaveis recebidas no Post da pagina ($_POST)
     * @var array 
     */

    private $postVars = [];
    /** 
     * Cabeçalho da requisição tudo que o cliente da req envio no header
     * @var array 
     */

    private $headers = [];

    /** 
     * Construtor da Classe "Popular os dados dessa requisição"
     * @var array 
     */
    public function __construct()
    {
        $this->queryParams = $_GET ?? [];
        $this->postVars    = $_POST ?? [];
        $this->headers     = getallheaders(); // função q recebe todos os cabeçalhos
        $this->httpMethod  = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri         = $_SERVER['REQUEST_URI'] ?? '';
    }


    /**
     * Metodo Responsavel por retornar o método HTTP     
     * @return string 
     */

    public function getHttpMethod()
    {
        return $this->httpMethod;
    }
    /**
     * Metodo Responsavel por retornar a URI da requisição
     * @return string 
     */
    public function getUri()
    {
        return $this->uri;
    }
    /**
     * Metodo Responsavel por retornar os Cabeçalhos da requisição
     * @return array 
     */
    public function getHEaders()
    {
        return $this->headers;
    }
    /**
     * Metodo Responsavel por retornar os parametros da requisição "querystring"
     * @return array 
     */
    public function getQueryParans()
    {
        return $this->queryParams;
    }
    /**
     * Metodo Responsavel por retornar as variaveis POST da requisição 
     * @return array 
     */
    public function getPostVars()
    {
        return $this->postVars;
    }
}
