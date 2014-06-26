<?php
if(!defined('DRAP')) {die('Direct access not permitted');}

class Dispatcher {

    function __construct($controller) {
        $tmp    = $controller . "Controller";
        $file   = CTRL . $controller . ".php";
        if (file_exists($file)) {
            include $file;
            return new $tmp(); 
        } else {
            echo $file . " failed";
        }
    }
}