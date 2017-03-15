<?php

class User extends Model {

  protected static $table_name = 'USER';

    public $id;
    public $nom;
    public $password;
    public $mail;

    public static function isLoginUsed($login) {
      $pdo = DatabasePDO::getCurrentPDO();
      // $resultat = $pdo->exec("SELECT * FROM joueur WHERE $login = joueur.pseudo");
      $resultat = $pdo->prepare("SELECT * FROM joueur WHERE pseudo = '$login'");
      // $resultat = $pdo->prepare("SELECT * FROM joueur");
      $resultat->execute();
      $result = $resultat->fetch(PDO::FETCH_ASSOC);
      // print_r($result);
      // print_r($result["PSEUDO"]);
      // print_r($result["MDP"]);

      if($result["PSEUDO"] != NULL) {
        return true;
      }
      return false;

      // $pdo->exec("INSERT INTO joueur VALUES ($login,'prigentcorentin56@gmail.com',NULL,NULL,'coco',NULL,2)");

    }

    public static function getList() {
      return parent::exec('USER_LIST');
    }

    public static function addSqlQuery($name, $requeteSQL) {

    }

    public static function create($login, $password, $mail, $nom, $prenom) {
      $user = new User;
      $user->login = $login;
      $user->mail = $mail;
      $user->password = $password;
      return $user;

      // $sth = parent::exec('USER_CREATE',
      //   array( ':login' => $login,
      //   ':email' => $mail,
      //   ':role' => 1,
      //   ':pwd' => $pwd,
      //   ':name' => $prenom,
      //   ':surname' => $nom));
      // return static::tryLogin($login, $pwd);

    }

    // Accesseurs
    public function getId() {
      return $this->id;
    }

    // if(isset($user)) {
    //
    //   echo $user->nom();
    //   echo $user->login();
    // }

    public function setId() {
      $this->id = getId($this->login);
    }
    // public function id() { return $this->props[self::$table_name.'_ID']; }
    public function roleId() { return $this->props[self::$table_name.'_ROLE']; }
    public function role() { return Role::getWithId($this->roleId()); }
    public function isAdmin() { return ($this->role()->isAdmin()) || ($this->role()->isSuperAdmin()); }
    public function isSuperAdmin() { return $this->role()->isSuperAdmin();


  }
}

   ?>
