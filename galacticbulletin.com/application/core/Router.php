<?php

namespace application\core;

use application\core\View;

class Router {
    protected $routes = [];
    protected $params = [];

    function __construct() {
        $arr = require 'application/config/routes.php';

        foreach($arr as $key => $val) {
            $this->addRouter($key, $val);
        }
    }

    //Добавление маршрута
    public function addRouter($route, $params) {
        $route = preg_replace('/{([a-z]+):([^\}]+)}/', '(?P<\1>\2)', $route);
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    //Проверить маршрут
    public function checkRouter() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        if (is_numeric($match)) {
                            $match = (int) $match;
                        }
                        $params[$key] = $match;
                    }
                }
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    //Запустить Route
    public function runRouter() {
        if ($this->checkRouter()) {
            $path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'].'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                }
                else {
                    View::errorCode(404);
                    //echo 'Action не найден: '.$action;
                }
            }
            else {
                View::errorCode(404);
                //echo 'Controller не найден: '.$path;
            }
        }
        else {
            View::errorCode(404);
            //echo 'Route не найден ';
        }
    }
}
?>