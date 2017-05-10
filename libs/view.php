<?php

Class View{

    function __construct()
    {

    }

    public function render($viewName, $include = true){
        if($include){
            require('views/header.php');
            require('views/'.$viewName.'.php');
            require('views/footer.php');
        }
        else{
            require('views/'.$viewName.'.php');
        }
    }
}