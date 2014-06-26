<?php

class DefaultController extends Controller {
    function __construct() {

        parent::getModel("Default");
        $this->d = @$_POST['user'] ? $_POST['user'] : "";
        parent::getView("Default", $this->d);

    }
}

?>