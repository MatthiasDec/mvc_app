<?php

Class Login extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function connect(){
        if($this->model->connect()){
            header('location:'.ROOTPATH);
            exit;
        }
        else{
            header('location:'.ROOTPATH.'login/error');
            exit;
        }
    }

    function error(){
        //Change message here
        $this->view->loginMessage = 'Wrong password or mail';
        $this->renderPage();
    }
}