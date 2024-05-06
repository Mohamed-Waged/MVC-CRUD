<?php 

class App{

    protected $controller = "HomeController" ;
    protected $action = "index" ;
    protected $params = [] ;

    public function __construct(){
        $this->prepareUrl();
        $this->render();
    }


// Define Controller , Method , Parameters
    private function prepareUrl(){
        $url = $_SERVER['QUERY_STRING'];
        if (!empty($url)) {
            $url = rtrim($url, '/');
            $url = explode('/', $url);
            
            $this->controller = isset($url[0]) ? ucfirst($url[0])."Controller" : "HomeController";
            $this->action = isset($url[1]) ? $url[1] : "index";
            unset($url[0],$url[1]);

            $url = array_values($url);
            $this->params = !empty($url) ? array_values($url) : [] ;
        } 
    }
    
    private function render() {
        if (class_exists($this->controller)) {

            $controller = new $this->controller;

            if (method_exists($controller, $this->action)) {
                call_user_func_array([$controller, $this->action], $this->params);
            }else {
                echo "This Method : $this->action Not Found";
            }
        }else {
            echo "This Controller : $this->controller Not Found";
        }
    }
}