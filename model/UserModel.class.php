<?php

class UserModel extends Model {

  public $pdo = DatabasePDO;

  public static function isLoginUsed($login) {
    $pdo->exec("SELECT * FROM users WHERE $login = users.login");
  }

  public static function create($login, $password, $mail, $nom, $prenom) {

  }



}

 ?>
