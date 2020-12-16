<?php

namespace Application\Controllers;

use Core\BaseController;

class AjaxEndPoint extends BaseController
{
  public function index($param) 
  {
    // Output "no suggestion" if no hint was found or output correct values
    echo $param === "" ? "no suggestion" : $param;
  }
}


