<?php

Class Controller{

    function __construct()
    {
        $this->view = new View();
    }

    function renderPage(){
        $className = strtolower(get_class($this));
        $this->view->render($className);
    }
}