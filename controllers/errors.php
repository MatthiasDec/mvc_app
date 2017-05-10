<?php

Class Errors extends Controller {

    function __construct()
    {
        parent::__construct();
        //$this->view->msg = 'Page not found'; Send var before render !
    }

    function render($message){
        $this->view->message = $message;
        $this->view->render('errors');
    }
}