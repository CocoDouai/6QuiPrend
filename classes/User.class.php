<?php

class User extends MyObject {

  public static function isLoginUsed($login) {
    // requête SQL vers bdd afin de voir si $login existe ou pas
    return false;
  }

  public static function create($login, $password, $mail, $nom, $prenom) {
// création d'un utilisateur dans la bdd
    return true;
  }

}

?>
