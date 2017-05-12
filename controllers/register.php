<?php

Class Register extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    function addUser(){
        $result = $this->model->addUser();
        if($result == 1){
            header('location:'.ROOTPATH.'login/welcome');
            exit;
        }
        elseif($result == 2){
            $this->view->errorMessage = 'L\'adresse email et/ou le mot de passe ne correspond pas';
            $this->renderPage();
        }
        elseif($result == 3){
            $this->renderPage();
        }
        else{
            $this->view->errorMessage = 'Adresse email déjà utilisée';
            $this->renderPage();
        }
    }
}