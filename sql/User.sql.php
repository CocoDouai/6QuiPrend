<?php

function DB_createUser($user){
  $pdo = DatabasePDO::getCurrentPDO();
  $resultat = $pdo->prepare("INSERT INTO joueur (PSEUDO, ADRESSE_MEL, PARTIES_GAGNEES, PARTIES_PERDUES, MDP, SCORE_GENERAL, ID_JOUEUR) VALUES (:login, :mail, NULL, NULL, :password, NULL, NULL)");
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

User::addSqlQuery('USER_LIST', 'SELECT * FROM USER ORDER BY USER_LOGIN');

User::addSqlQuery('USER_GET_WITH_LOGIN_AND_PASSWORD',
'SELECT * FROM USER WHERE USER_LOGIN=:login');

User::addSqlQuery('USER_CREATE',
'INSERT INTO USER (USER_ID, USER_LOGIN, USER_EMAIL, USER_ROLE,
USER_PWD, USER_NAME, USER_SURNAME) VALUES
(NULL, :login, :email, :role, :pwd, :name, :surname)');

User::addSqlQuery('USER_CONNECT',
'SELECT * FROM USER WHERE USER_LOGIN=:login and USER_PWD=:password');
