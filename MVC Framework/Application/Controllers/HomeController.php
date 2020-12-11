<?php
namespace Application\Controllers;

use Core\BaseController;

class HomeController extends BaseController {

    private function checkLogin() {
        if (!isset($_SESSION['session_id'])) {
            return false;
        }
        return true;
    }

    function login() {
        if($this->checkLogin() == true) {
            header('location:/newfeed');
        } else
            $this->render( DS. "Authentication" . DS . "login");
    }

    function register() {
        $this->render( DS . "Authentication" . DS . "register");
    }

    function newfeed() {
        if($this->checkLogin()) {
            echo $_SESSION['session_id'];
            $this->render( DS . "Feeds" . DS . "testfeed");
        }
        else
            header('location:/login');
    }
}