<?php
class Router
{

  	private $url; // Contiendra l'URL sur laquelle on souhaite se rendre
    private $routes = []; // Contiendra la liste des routes
    private $namedRoutes = [];

    public function __construct($url){
        $this->url = $url;
    }

    public function get($path, $callable, $name = null, $container){
        return $this->add($path, $callable, $name, 'GET', $container);
    }

    public function post($path, $callable, $name = null, $container){
        return $this->add($path, $callable, $name, 'POST', $container);
    }

    private function add($path, $callable, $name, $methode, $container){
        $route = new Route($path, $callable, $container);
        $this->routes[$methode][] = $route;
        if (is_string($callable) && $name === null) {
            $name = $callable;
        }
        if($name){
            $this->namedRoutes[$name] = $route;
        }
        return $route;
    }

    public function run(){
        if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
            throw new RouterException('REQUEST_METHOD does not exist');
        }
        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
            if($route->match($this->url)){
                return $route->call();
            }
        }
        throw new RouterException('No matching routes');
    }

    public function url($name, $params = []){
        if(!isset($this->namedRoutes[$name])){
            throw new RouterException('No route matches this name');
        }
        return $this->namedRoutes[$name]->getUrl($params);
    }
}