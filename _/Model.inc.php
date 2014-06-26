<?php
if(!defined('DRAP')) {die('Direct access not permitted');}

class Model {
    private $db;

    function __construct(){
        try {
            $this->db = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASENAME, USER, PASS, array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                ));
        } catch(PDOException $e) {
            die('<h1>Impossible de se connecter a la base de donnee</h1>');
        }
        var_dump($this->db);
    }

    function query($sql){
        $req = $this->db->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>