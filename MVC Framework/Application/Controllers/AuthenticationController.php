<?php
namespace Application\Controllers;

use Core\BaseController;
use Core\Model;
use Core\Route;

class AuthenticationController extends BaseController {
    function login() {
        $formPost = $_POST;
        $this->secure_form($formPost);
        echo $formPost['email'] . "<br>";
        echo $formPost['password'] . "<br>";
        if (isset($formPost['logged']))
            echo $formPost['logged'] . "<br>";
    }

    function register() {
        $formPost = $_POST;
        $this->secure_form($formPost);
        foreach($formPost as $input) {
            echo $input . "<br>";
        }
    }
}