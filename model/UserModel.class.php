<?php

class UserModel extends Model {

  $pdo = DatabasePDO('localhost', 'test', 'root', '', null, "mysql:host=localhost;dbname=test");

  public static function isLoginUsed($login) {
    $pdo->exec("SELECT * FROM users WHERE $login = users.login");
  }

  public static function create($login, $password, $mail, $nom, $prenom) {

  }



}

 ?>
