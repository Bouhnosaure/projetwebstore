<?php
if(!defined('DRAP')) {die('Direct access not permitted');}

function getCurrentUrl() {
    $prt = $_SERVER['SERVER_PORT'] == 80 ? "http" : "https";
    $uri = explode('?', $_SERVER['REQUEST_URI'], 2);
    $url = $prt . "://" . $_SERVER['HTTP_HOST'] . $uri[0];    
    return $url;
}

function getRequest() {
    return @$request = $_GET['p'] ? $_GET['p'] : "";
}

?>