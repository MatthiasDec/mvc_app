<?php
$url = $_GET['url'];

echo $url;

require_once ('controllers/'.$url.'.php');

$controller = new $url;
