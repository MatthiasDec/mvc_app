<?php

Class Index extends Controller {

    function __construct()
    {
        parent::__construct();

        //Verify if the user is connected or not
        (isset($_SESSION['connected']) && $_SESSION['connected']) ? $this->view->connected = true : $this->view->connected = false;
    }

    //Create a new class or in there ??
    //Destroy the session and redirect to the index
    function disconnect(){
        Session::destroy();
        header('location:'.ROOTPATH);
        exit;
    }
}