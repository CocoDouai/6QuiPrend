<?php

class AnonymousController extends Controller {

  public function defaultAction($args) {
    $view = new AnonymousView($this, 'default');
    $view->render();
  }

  public function Entrer($args) {
    $view = new AnonymousView($this, 'inscriptionTemplate');
    $view->render();
  }

  public function Bienvenue($args) {
    $view = new ConnexionView($this, 'inscriptionTemplate');
    $view->render();
  }

  public function validateConnexion($args) {
    $login = $args->read('conLogin');
    $password = $args->read('conPassword');
    if(User::isPasswordCorrect($login, $password)) {
      $view = new AnonymousView($this, 'inscriptionTemplate');
      $view->setArg('conErrorText', 'You make a mistake tapping your password');
      $view->render();
    }
    else {
      $newRequest = new Request();
      $newRequest->write('controller','user');
      // $newRequest->write('user',$user->setId());
      $newRequest->write('action', 'defaultAction');
      $controller=Dispatcher::getCurentDispatcher()->dispatch($newRequest);
      $controller->execute();
    }
  }

  public function validateInscription($args) {
    $login = $args->read('inscLogin');

    if(User::isLoginUsed($login)) {
      $view = new AnonymousView($this,'inscriptionTemplate');
      $view->setArg('inscErrorText','This login is already used');
      $view->render();
    } else {
      $password = $args->read('inscPassword');
      $nom = $args->read('nom');
      $prenom = $args->read('prenom');
      $mail = $args->read('mail');
      $user = User::create($login, $password,$mail,$nom,$prenom);
      if(!isset($user)) {
        $view = new AnonymousView($this,'inscriptionTemplate');
        $view->setArg('inscErrorText', 'Cannot complete inscription');
        $view->render();
      } else {
        require_once('/sql/User.sql.php');
        DB_createUser($user);
        // $user->getId();
        $_SESSION['user']=$user;
        print_r($user);
        $newRequest = new Request();
        $newRequest->write('controller','user');
        $newRequest->write('user',$user->setId());
        $newRequest->write('action', 'defaultAction');
        $controller=Dispatcher::getCurentDispatcher()->dispatch($newRequest);


        $controller->execute();

        // // print_r($newRequest);
        // var_dump($_GET);
        // Dispatcher::theDispatch($newRequest);
      }
}


}
}

 ?>
