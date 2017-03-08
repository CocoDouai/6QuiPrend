<?php

class DatabasePDO extends PDO {

    private $DB_HOST = 'localhost';
    private $DB_NAME = '6quiprend';
    private $DB_USER = 'root';
    private $DB_PWD = 'root';
    private $db_connection = null;
    private $dsn = 'mysql:host=localhost;dbname=6quiprend';

    private static $BDD;

    public function getCurrentPDO(){
      if(!(self::$BDD instanceOf self) ){
        try{
          self::$BDD = new PDO('mysql:host='.$DB_HOST.';dbname='.$DB_NAME.';charset=utf-8', $BD_USER, $DB_PWD);
        }catch(Exception $e){
          die('Erreur : '.$e->getMessage());
        }
      }
      return self::$BDD;
    }

}

?>
