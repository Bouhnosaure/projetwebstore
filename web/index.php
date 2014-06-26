<?php

require_once("../config.php");

foreach (glob(CORE . "*.inc.php") as $f) {
    require_once($f);
}

$r = getRequest();

switch ($r) {

    case '':
        new Dispatcher("LogIn");
        break;

    case 'login':
        new Dispatcher("LogIn");
        break;

    default:
        new Dispatcher("Error");
        break;
}
