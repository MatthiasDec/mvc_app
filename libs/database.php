<?php

Class Database extends PDO{

    function __construct()
    {
        require('config/database.php');
        parent::__construct('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpass);
    }

}