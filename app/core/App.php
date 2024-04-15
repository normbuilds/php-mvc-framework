<?php
class App{
    private $controller = 'Home';
    private $method     =  'index';
    private  function splitURL()
    {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode('/',$URL);
        return $URL;
    
    }
    private function loadController()
    {
        $URL = $this-> splitURL();
        $fileName = './app/controllers/' . ucfirst($URL[0]).'.php';
        if(file_exists($fileName))
        {
            require $fileName;
            $this->controller =  ucfirst($URL[0]);
        }
        else
        {
            require './app/controllers/NotFound.php';
            $this->controller = 'NotFound';
        }
    }

    public function getLoadController()
    {
        return $this->loadController();
        $controllerName = $this->controller;
        $methodName = $this->method;
        
        $controller = new $controllerName();
        
        // Check if the method exists in the controller before calling it
        if (method_exists($controller, $methodName)) {
            $controller->$methodName();
        } else {
            // Handle method not found error
            echo 'Method not found';
    }
    
   
} 
}
