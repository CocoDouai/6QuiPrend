<?php

class AnonymousController extends Controller {

  public function defaultAction($args) {
    $view = new AnonymousView($this, 'default');
    $view->render();
  }

  public function inscription($args) {
    $view = new AnonymousView($this, 'inscriptionTemplate');
    $view->render();
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
