# ExiaStore Project

Developped on a WAMP stack by a bunch of superheroes :3

## TODO
- Better url rewrite not based on __?params=value__ but __$_SERVER__
- Some security !
- Split shop website and the intranet

## Server requirements 

### Apache
(see **httpd.conf**)

- rewrite_module
- vhost_alias_module

### PHP
(see **php.ini**)

- php_pdo_mysql uncommented
- short_open_tag = On

### vhosts
(see **httpd-vhosts.conf**)

```
<VirtualHost exiastore.com:80>
    DocumentRoot "D:\wamp\www\webproject\web"
    ServerName "exiastore.com"
    ServerAlias "www.exiastore.com"
    ErrorLog "D:\wamp\www\webproject\error.log"
    CustomLog "D:\wamp\www\webproject\custom.log" common
</VirtualHost>
```

### hosts
(see [here][1])

```
127.0.0.1 exiastore.com
```

### config.php
(see **config.php**)
```
error_reporting(-1);
ini_set("display_errors", 1);

define('ROOT', realpath(dirname(__FILE__)) . '/');
define('CORE', ROOT . '_/');
define('CTRL', ROOT . 'Controller/');
define('MODL', ROOT . 'Model/');
define('VIEW', ROOT . 'View/');
define('TMPL', VIEW . 'tpl/');
define('STIC', 'http://exiastore.com/static');
define('DRAP', TRUE); // Direct Access Protection

const HOST = "localhost";
const PORT = "3306";
const USER = "root";
const PASS = "";
const DATABASENAME = "exiastore";
```

[1]:http://en.wikipedia.org/wiki/Hosts_%28file%29#Location_in_the_file_system