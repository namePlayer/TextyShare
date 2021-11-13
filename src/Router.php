<?php

namespace namePlayer\TextyShare;

class Router
{

    public function readAndOutputRequestedUrl(): string {
        $requestedUrl = $_SERVER['REQUEST_URI'];
        $requestedPath = str_replace('/index.php','', $_SERVER['SCRIPT_NAME']);
        return str_replace($requestedPath, '', $requestedUrl);
    }

    public function readAndOutputRequestedPath(): string {
        $requestedUrl = $_SERVER['REQUEST_URI'];
        return str_replace('/index.php','', $_SERVER['SCRIPT_NAME']);
    }

    public function route($path = null, $action = null, $methods = 'POST|GET',bool $directRequestDisabled = false) {
        static $routes = [];

        if(!$path){
            return $routes;
        }
        if(strpos($path, '..') !== false){
            return NULL;
        }

        if ($action) {
            return $routes['(' . $methods . ')_' . $path] = [$action,$directRequestDisabled];
        }
        $originalPath = str_replace('?'.$_SERVER['QUERY_STRING'], '', $path);
        $path = $_SERVER['REQUEST_METHOD'].'_'.$originalPath;
        foreach ($routes as $route => $data) {
            list($action,$currentDirectRequestIsDisabled) = $data;
            $regEx = "~^$route/?$~i";

            $matches = [];
            if (!preg_match($regEx, $path, $matches)) {
                continue;
            }
            if (!is_callable($action)) {
                return false;
            }
            if($currentDirectRequestIsDisabled && $_SERVER['REQUEST_URI'] && $_SERVER['REQUEST_URI'] === $originalPath){
                return false;
            }
            array_shift($matches);
            array_shift($matches);
            $response = $action(...$matches);
            return $response;
        }
        return false;
    }

}