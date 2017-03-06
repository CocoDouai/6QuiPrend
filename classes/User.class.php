<?php

class User extends MyObject {


//   public static function isLoginUsed($login) {
//     // requête SQL vers bdd afin de voir si $login existe ou pas
//     return false;
//   }
//
//   public static function create($login, $password, $mail, $nom, $prenom) {
// // création d'un utilisateur dans la bdd
//     return true;
//   }

  private $id;
  private $name;
  private $surname;
  private $email;

  public function toHtml()
  {
    echo "<ul><li>Id : " . $this->id . "</li>";
    echo "<li>Name : " . $this->name . "</li>";
    // echo "<li>Surname : ". $this->surname ."</li>";
    echo "<li>Email : " . $this->email . "</li></ul>";
  }
  }

  $sql = 'select id, name from users';
  $request = $db_connection->query($sql);
  echo '<h1>Users</h1>';
  $allUsers = $request->fetchAll(PDO::FETCH_CLASS,'User');
  // for(int i=0; i<sizeof($allUsers); i++) {
  // 	$allUsers[i]->toHtml();
  // }
  foreach ($allUsers as $key) {
    $key->toHtml();

  }

?>
