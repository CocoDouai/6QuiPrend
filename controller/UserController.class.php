<?php

class UserController extends Controller {

  public function defaultAction($args) {
    $view = new UserView($this, 'userTemplate');
    $view->render();
  }

  public function listeDesParties($args) {
    $view = new UserView($this, 'listePartie');
    $view->render();
  }


}

 ?>
