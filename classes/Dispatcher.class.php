<?php

class Dispatcher extends MyObject {

  public function __construct() {
    spl_autoload_register(array($this, 'load'));
  }

  public static function dispatch($request) {
    return static::dispatchToController($request->getControllerName(),$request);
  }

  public static function dispatchToController($controllerName, $request) {
    $controllerClassName = ucfirst($controllerName) . 'Controller';
    if(!class_exists($controllerClassName)) {
      throw new Exception("$controllerName does not exists");
    }
      return new $controllerClassName($request);
}

}

 ?>
