<?php
    session_start();

    require('libs/bootstrap.php');
    require('libs/controller.php');
    require('libs/model.php');
    require('libs/view.php');

    require('config/paths.php');
    require('config/database.php');

    $app = new Bootstrap();