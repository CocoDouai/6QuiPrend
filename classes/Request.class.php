<?php

  class Request extends MyObject {

    public function __construct() {

    }
    // Reify the current request
    $request = Request::getCurrentRequest();

    public getControllerName {
      return 'Anonymous';
    }
  }

?>
