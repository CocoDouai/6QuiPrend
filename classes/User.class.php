<?php

class User extends MyObject {

    public $pdo = DatabasePDO;

        private $DB_HOST = 'localhost';
        private $DB_NAME = '6quiprend';
        private $DB_USER = 'root';
        private $DB_PWD = 'root';
        private $db_connection = null;
        private $dsn = 'mysql:host=localhost;dbname=6quiprend';

    public static function isLoginUsed($login) {
      $pdo = new DatabasePDO('mysql:host=localhost;port=3306;dbname=6quiprend', 'root', 'root');
      // exec("SELECT * FROM users WHERE $login = users.login");
      // $resultat = $pdo->exec("SELECT * FROM joueur WHERE $login = joueur.pseudo");
      $resultat = $pdo->query("SELECT * FROM joueur WHERE pseudo = $login");
      // if($resultat) {
      //   echo 'true';
      //   return true;
      // }
      // echo 'false';
      // return false;
      // $resultat->fetch(PDO::FETCH_ASSOC);
      // $pdo->exec("INSERT INTO joueur VALUES ($login,'prigentcorentin56@gmail.com',NULL,NULL,'coco',NULL,1)");

    }

    public static function create($login, $password, $mail, $nom, $prenom) {

    }



  }

   ?>
