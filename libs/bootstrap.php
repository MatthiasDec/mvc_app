<?php

Class Bootstrap{

    function __construct()
    {
        $url = $_GET['url'];
        $url = trim($url,'/');
        $url = explode('/', $url);

        $filePath = 'controllers/'.$url[0].'.php';

        if(file_exists($filePath)){
            require($filePath);
            $controller = new $url[0];

            if(isset($url[2])){
                $controller->{$url[1]}($url[2]);
            }
            elseif(isset($url[1])){
                $controller->{$url[1]}();
            }
        }
        else{
            require('controllers/errors.php');
            $controller = new Errors();
        }
    }

}