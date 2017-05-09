<?php

Class Index extends Controller {
    function __construct()
    {
        parent::__construct();
        $this->view->render('index');
    }

   function test($bla = false){
        echo 'Param passed : '.$bla;
    }
}