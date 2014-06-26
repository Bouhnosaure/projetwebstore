<?php

error_reporting(-1);
ini_set("display_errors", 1);

define('ROOT', realpath(dirname(__FILE__)) . '/');
define('CORE', ROOT . '_/');
define('CTRL', ROOT . 'Controller/');
define('MODL', ROOT . 'Model/');
define('VIEW', ROOT . 'View/');
define('TMPL', VIEW . 'tpl/');
define('STIC', 'http://localhost/webproject/web/static');
define('DRAP', TRUE); // Direct Access Protection

const HOST = "localhost";
const PORT = "3306";
const USER = "root";
const PASS = "";
const DATABASENAME = "exiastore";

?>