<?php
namespace Application\Controllers;

use Core\BaseController;
use Core\Model;
use Core\Route;

class HomeController extends BaseController {
    function login() {
        $this->render( DS . "Authentication". DS . "login");
    }

    function register() {
        $this->render( DS . "Authentication" . DS . "register");
    }
}