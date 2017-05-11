<?php

Class Login extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function connect(){
        $this->model->connect();
    }
}