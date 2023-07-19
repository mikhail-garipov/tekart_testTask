<?php

namespace application\core;

class View {
    public $path;
    public $route;
    public $layout = 'default';

    function __construct($route) {
        $this->route = $route;
        $this->path = $this->route['controller'].'/'.$this->route['action'];
    }

    public function render($titlePage, $vars = []) {
        extract($vars);
        $path = 'application/views/'.$this->path.'.php';
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'application/views/layouts/'.$this->layout.'.php';
        }
        else {
            echo 'Вид не найден: '.$this->path;
        }
    }

    public function redirect($url) {
        header('location: '.$url);
        exit;
    }

    public static function errorCode($errorCode) {
        http_response_code($errorCode);
        $path = 'application/views/errors/'.$errorCode.'.php';
        if (file_exists($path)) {
            require $path;
        }
        exit;
    }
}
?>