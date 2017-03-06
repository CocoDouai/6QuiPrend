<?php

class DatabasePDO extends PDO {

    $DB_HOST = 'localhost';
    $DB_NAME = 'test';
    $DB_USER = 'root';
    $DB_PWD = '';
    $db_connection = null;
    $dsn = "mysql:host=localhost;dbname=$DB_NAME";
    //
    //  Fonction construct faite
    //
    // public function __construct($DB_HOST, $DB_NAME, $DB_USER, $DB_PWD, $db_connection, $dsn) {
    //   $this->DB_HOST = $DB_HOST;
    //   $this->DB_NAME = $DB_NAME;
    //   $this->DB_USER = $DB_USER;
    //   $this->DB_PWD = $DB_PWD;
    //   $this->db_connection = $db_connection;
    //   $this->dsn = $dsn;
    // }

    try {

    $pdo = new PDO($dsn,$DB_USER,$DB_PWD);
    $db_connection = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME",
    $DB_USER,
    $DB_PWD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("CREATE TABLE IF NOT EXISTS users (id INT not null AUTO_INCREMENT, name VARCHAR(30), surname VARCHAR(30), primary key (id))");

    $pdo->exec("DELETE FROM users");
    $pdo->exec("INSERT INTO users (name) VALUES('riri')");
    $pdo->exec("INSERT INTO users (name) VALUES('fifi')");
    $pdo->exec("INSERT INTO users (name) VALUES('loulou')");
  }
  catch (PDOException $erreur) {
    if ($verbose)
      echo 'Erreur : '.$erreur->getMessage();
    else
      echo 'Désolé cher utilisateur...';
    }

}

?>
