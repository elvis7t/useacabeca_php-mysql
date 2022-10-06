<?php

namespace App\Http;

use \Closure;
use \Exception;
use \ReflectionFunction;

class Router
{
    /**
     * URL Completa do Projeto (raiz)
     * @var string 
     */
    private $url = '';
    /**
     * Prefixo de todas as rotas
     * @var string 
     */
    private $prefix = '';
    /**
     * Indices de rotas
     * @var array 
     */
    private $routes = [];
    /**
     * Instancia de Request
     * @var request 
     */
    private $request;
    /**
     * Metodo responsável por iniciar a classe
     * @var request $url
     */

    public function __construct($url)
    {
        $this->request = new request();
        $this->url     = $url;
        $this->setPrefix();
    }
    /**
     * Metodo responsável por definir o prefixo das rotas
     * @var request $url
     */
    private function setPrefix()
    {
        //INFORMAÇÔES DA URL ATUAL
        $parseUrl = parse_url($this->url);

        // DEFINE O PREFIXO NO CASO PATH
        $this->prefix = $parseUrl['path'] ?? '';
    }
    /**
     * Metodo Responsavel por add uma rota na Classe
     * @param string $method
     * @param string $router
     * @param array $params
     */

    private function addRoute($method, $route, $params = [])
    {
        //VALIDAÇÂO DOS Parametros
        foreach ($params as $key => $value) {
            if ($value instanceof Closure) {
                $params['controller'] = $value;
                unset($params[$key]);
                continue;
            }
        }
        //VARIAVEIS DA ROTAS
        $params['variables'] = [];

        //PADRÃO DE VALIDAÇÃO DAS VARIAVEIS DAS ROTAS
        $patternVariable = '/{(.*?)}/';
        if (preg_match_all($patternVariable, $route, $matches)) {
            $route = preg_replace($patternVariable, '(.*?)', $route);
            $params['variables'] = $matches[1];
        }

        //PADRÂO DE VALIDAÇÂO DA URL
        $patternRoute = '/^' . str_replace('/', '\/', $route) . '$/';

        //ADICIONA A ROTA DENTRO DA CLASSE
        $this->routes[$patternRoute][$method] = $params;
    }


    /**
     * Metodo Responsavel por definir uma rota GET
     * @param string $route
     * @param array $params     
     */

    public function get($route, $params = [])
    {
        return $this->addRoute('GET', $route, $params);
    }
    /**
     * Metodo Responsavel por definir uma rota POST
     * @param string $route
     * @param array $params     
     */

    public function post($route, $params = [])
    {
        return $this->addRoute('POST', $route, $params);
    }
    /**
     * Metodo Responsavel por definir uma rota PUT
     * @param string $route
     * @param array $params     
     */

    public function put($route, $params = [])
    {
        return $this->addRoute('PUT', $route, $params);
    }
    /**
     * Metodo Responsavel por definir uma rota DELETE
     * @param string $route
     * @param array $params     
     */

    public function delete($route, $params = [])
    {
        return $this->addRoute('DELETE', $route, $params);
    }
    /**
     * Metodo Responsavel por retornar a uri desconsiderando o prefixo
     * @return string
     */
    private function getUri()
    {
        //URI DA REQUEST
        $uri = $this->request->getUri();
        //FATIA A URI COM O PREFIXO
        $xURI = strlen($this->prefix) ? explode($this->prefix, $uri) : [$uri];

        //RETORNA O URI SEM PREFIXO
        return end($xURI);
    }
    /**
     * Metodo Responsavel por retornar os dados da rota atual     
     * @return array
     */
    private function getRoute()
    {
        //URI 
        $uri = $this->getUri();

        //METHODB request
        $httpMethod = $this->request->getHttpMethod();

        //VALIDA AS ROTAS
        foreach ($this->routes as $patternRoute => $methods) {
            //VERIFIVA SE A URI BATE COM O PADRÂO                           
            if (preg_match($patternRoute, $uri, $matches)) {

                //VERIFICA O METODO 
                if (isset($methods[$httpMethod])) {
                    //REMOVE A PRIMEIRA POSIÇÂO
                    unset($matches[0]);
                    //VARIAVEIS PROCESSADAS
                    $keys = $methods[$httpMethod]['variables'];
                    $methods[$httpMethod]['variables'] = array_combine($keys, $matches);
                    $methods[$httpMethod]['variables']['request'] = $this->request;


                    //RETORNO DOS PARAMETROS DA ROTA
                    return $methods[$httpMethod];
                }
                //METODO NÂO PERMITIDO DEFINIDO
                throw new Exception("Metododo não permitido", 405);
            }
        }
        //URL NÂO ENCONTRADA
        throw new Exception("URL não encontrada", 404);
    }
    /**
     * Metodo Responsavel por executar a rota atual
     * @return Response     
     */
    public function run()
    {
        try {

            //OBTEM A ROTA ATUAL
            $route = $this->getRoute();

            //VERIFICA CONTROLADOR
            if (!isset($route['controller'])) {
                throw new Exception("URL não pode ser processada", 500);
            }

            //ARGUMENTOS DA FUNÇÂO
            $args = [];

            //REFLECTION
            $reflection = new ReflectionFunction($route['controller']);
            foreach ($reflection->getParameters() as $parameter){
                $name = $parameter->getName();
                $args[$name] = $route['variables'][$name] ?? '';
            }            

            //RETORNA A EXECUÇÂO DA FUNÇÂO
            return call_user_func_array($route['controller'], $args);
        } catch (Exception $e) {
            return new Response($e->getCode(), $e->getMessage());
        }
    }
}
