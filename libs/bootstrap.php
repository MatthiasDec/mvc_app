<?php

Class Bootstrap{

    function __construct()
    {
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = trim($url,'/');
            $url = explode('/', $url);
        }
        else{
            $url[0] = 'index';
        }

        $filePath = 'controllers/'.$url[0].'.php';

        if(file_exists($filePath)){
            require($filePath);
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            if(isset($url[1])){
                if(method_exists($controller, $url[1])){
                    if(isset($url[2])){
                        $controller->{$url[1]}($url[2]);
                    }
                    else{
                        $controller->{$url[1]}();
                    }
                }
                else{
                    $this->sendError('Action '.$url[1].' was not found');
                    return false;
                }
            }
            $controller->renderPage();
        }
        else{
            $this->sendError('The page you are looking for does not exist');
            return false;
        }
    }

    function sendError($message){
        require('controllers/errors.php');
        $errors = new Errors();
        $errors->view->message = $message;
        $errors->renderPage();
    }
}