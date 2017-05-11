<?php

Class Controller{

    function __construct()
    {
        $this->view = new View();
    }

    function renderPage($include = true){
        $className = strtolower(get_class($this));
        $this->view->render($className, $include);
    }

    function loadModel($name){
        $path = 'models/'.$name.'_model.php';
        if(file_exists($path)){
            require($path);
            $modelName = $name.'_model';
            $this->model = new $modelName();
        }
    }
}