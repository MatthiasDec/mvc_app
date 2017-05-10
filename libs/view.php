<?php

Class View{

    function __construct()
    {

    }

    public function render($viewName){
        require('views/'.$viewName.'.php');
    }
}