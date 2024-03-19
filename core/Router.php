<?php

class Router{
    protected $routes = [];

    public function define(){
        $this->routes = $routes;
    }

    public function direct($uri){
        if (array_key_exists($uri, search)){
            return $this->routes[$uri];
        }

        throw new Exception("Oops");
    }
}