<?php

namespace App\Http;

class Response
{

    /**
     * Código do status HTTP
     * @return integer 
     */

    private $httpCode = 200;

    /**
     * Cabeçalho do response
     * @return array 
     */
    private $headers = [];

    /**
     * Tipo de conteudo que esta sendo retornado
     * @return string
     */

    private $contentType = 'text/html';
    /**
     * Conteudo do Response
     * @return mixed
     */
    private $content;

    /**
     * Metodo Responsavel por iniciar a classe e definir os valores
     * @param interger $httpCode
     * @param mixed  $content
     * @return string $contentType
     */


    public function __construct($httpCode, $content, $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }
    /**
     * Metodo Responsavel por alterar o content Type  do response
     * @param string $contentType     
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }
    /**
     * Metodo Responsavel por inserir um registro no cabeçalho de response
     * @param string $key     
     * @param string $value     
     */
    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }
    /**
     * Metodo Responsavel por enviar a resposta para o navegador
     */

    private function sendHeaders(){
        //Status
        http_response_code($this->httpCode);

        foreach($this->headers as $key => $value){ 
            header($key.':'. $value);
        }

    }

     /**
     * Metodo Responsavel por enviar a resposta para o usuario
     */

    public function sendResponse(){
        //ENVIA OS HEADERS
        $this->sendHeaders();

        //IMPRIME O CONTEUDO
        switch ($this->contentType){
            // case 'application/json':
            case 'text/html':
                echo $this->content;
                exit;
        }
    }
}
