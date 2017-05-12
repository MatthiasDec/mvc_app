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
        $this->view->loginMessage = 'Adresse mail ou mot de passe incorrect';
        $this->renderPage();
    }

    function welcome(){
        $this->view->loginMessage = 'Inscription complète, veuillez vous connecter';
        $this->renderPage();
    }
}