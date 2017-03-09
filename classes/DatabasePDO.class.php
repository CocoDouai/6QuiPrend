<?php

class DatabasePDO extends PDO {

    private static $DB_HOST = 'localhost';
    private static $DB_NAME = '6quiprend';
    private static $DB_USER = 'root';
    private static $DB_PWD = 'root';
    private static $db_connection = null;
    private static $dsn = 'mysql:host=localhost;dbname=6quiprend';

    private static $BDD;

    public static function getCurrentPDO(){
      if(!(self::$BDD instanceOf self) ){
        try{
          self::$BDD = new PDO('mysql:host=localhost;dbname=6quiprend;charset=utf8', 'root', 'root');
        }catch(Exception $e){
          die('Erreur : '.$e->getMessage());
        }
      }
      return self::$BDD;
    }

}

?>
