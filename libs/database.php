<?php

Class Database extends PDO{

    function __construct()
    {
        parent::__construct('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER,DBPASS);
    }
}