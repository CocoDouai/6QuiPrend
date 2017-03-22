<?php

function DB_createUser($user){
  $pdo = DatabasePDO::getCurrentPDO();
  $resultat = $pdo->prepare("INSERT INTO joueur (PSEUDO, ADRESSE_MEL, PARTIES_GAGNEES, NB_PARTIES_JOUEE, MDP, SCORE_GENERAL, ID_JOUEUR) VALUES (:login, :mail, NULL, NULL, :password, NULL, NULL)");
  try {
    $resultat->execute(array(
      "login" => $user->login,
      "password" => $user->password,
      "mail" => $user->mail
    ));
  } catch(Exception $e) {
    echo 'erreur : '.$e;
  }
}

function Delete_Joueur_DB() {
    $pdo = DatabasePDO::getCurrentPDO();
    $resultat = $pdo->prepare("DELETE FROM joueur");
    try {
      $resultat->excute();
    } catch(Exception $e) {
      echo 'erreur : '.$e;
    }
}

function getId($pseudo) {
      $pdo = DatabasePDO::getCurrentPDO();
      $resultat = $pdo->prepare("SELECT ID_JOUEUR FROM joueur WHERE PSEUDO = $pseudo");
      try {
        $result = $resultat->execute();
      } catch(Exception $e) {
        echo 'erreur : '.$e;
      }
}
