<?php

Class Index extends Controller {
    function __construct()
    {
        echo 'Index controller';
    }

    function test($bla = false){
        echo 'Param passed : '.$bla;
    }

}