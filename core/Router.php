<?php

namespace core;

class Router
{

    private $controller = 'Site'; //classe por padrão é a Site
    private $method = 'home';  // armazena nome pagina

    private $param = [];

    public function __construct()
    {
      $router = $this->url();
    print_r($router);
      if(file_exists('app/controllers/'.ucfirst($router[0]).'.php')):
            $this->controller = $router[0];
            unset($router[0]);
            
        endif;
   

    }


    private function url(){
        $parse_url =  explode ('/', filter_input(INPUT_GET,'router', filter: FILTER_SANITIZE_URL )); // armazena as informações em router
        return $parse_url;
    }

}