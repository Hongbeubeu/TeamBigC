<?php
namespace Application\Controllers;

use Core\BaseController;
use Core\Model;
use Core\Route;

class AuthenticationController extends BaseController {
    function login() {
        var_dump($_POST);
    }
}