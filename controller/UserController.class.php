<?php

class UserController extends Controller {

  public function defaultAction($args) {
    $view = new UserView($this, 'default');
    $view->render();
  }


}

 ?>
