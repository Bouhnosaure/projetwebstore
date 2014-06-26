<?php 
if(!defined('DRAP')) {die('Direct access not permitted');}

class Controller {
    var $modelInstance;

/*    function __construct($n, $i) {
        $i = $i ? $i : null;
        self::getModel($n);
        self::getView($n, $i);
    }*/

    function getModel($model) {
        $tmp    = $model . "Model";
        $file   = MODL . $model . ".php";
        if (file_exists($file)) {
            include $file;
            $this->modelInstance = new $tmp(); 
        } else {
            echo $file . " failed";
        }
    }

    function getView($view, $input) {
        $input  = $input ? $input : null;
        $file   = VIEW . $view . ".php";
        if (file_exists($file)) {
            $data = $input;
            include $file;
        } else {
            echo $file . " failed";
        }     
    }

}