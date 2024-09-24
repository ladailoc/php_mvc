<?php
class App{
    private $__controller, $__action, $__params;
    function __construct(){
        global $routes;
        $this->__controller = $routes['default_controller'];
        $this->__action = 'index';
        $this->__params = [];
        $this->handleUrl();
    }

    function getUrl(){
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/';
        }
        return $url;
    }

    public function handleUrl(){
        $url = $this->getUrl();
        $url = array_filter(explode('/', $url)); // remove empty array elements
        $url = array_values($url); // re-index array

        // Xử lý controller
        if (!empty($url[0])) {
            $this->__controller = ucfirst($url[0]); 
            unset($url[0]);
        }
        else 
            $this->__controller = ucfirst($this->__controller); 

        if (file_exists('app/controllers/' . $this->__controller . '.php')){
            require_once 'controllers/' . $this->__controller . '.php';
            $this->__controller = new $this->__controller();
        }
        else 
            $this->loadError();
        // Xử lý action
        if (!empty($url[1])) {
            $this->__action = $url[1];
            unset($url[1]);
        }
        else {
            // default action is index
        }
        // Xử lý params
        $this->__params = array_values($url); // re-index array

        call_user_func_array([$this->__controller, $this->__action], $this->__params);
    }

    public function loadError($name='404'){
        require_once 'errors/'.$name.'.php';
    }
}

?>