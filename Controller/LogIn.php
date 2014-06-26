<?php
if(!defined('DRAP')) {die('Direct access not permitted');}

class LogInController extends Controller {
    function __construct() {

        self::getModel("LogIn");
        if(isset($_POST)) {
            $this->tmp['user']     = @$_POST['user'] ? $_POST['user'] : "";
            $this->tmp['pass']     = @$_POST['pass'] ? $_POST['pass'] : "";
        } else {
            $this->tmp['error'] = "Invalid information, retry !";
        }

        $this->tmp['reqUserPass']  = $this->modelInstance->selectUserPass($this->tmp['user'], $this->tmp['pass']);

        var_dump($this->tmp['reqUserPass']);
        print($this->tmp['reqUserPass'][0]['USERNAME']);

        self::getView("LogIn", $this->tmp);

    }

    function checkVar($var1, $var2) {
        if(empty($this))
        if ($var1 == $var2) return true;
        else return false;
    }
}