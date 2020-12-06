<?php
namespace Application\Controllers;

use Core\BaseController;
use Core\Model;
use Core\Route;
use Application\Models\TestModel;

class TestController extends BaseController
{
    function index() {
        $testModel = new TestModel();
        $rowss = $testModel->getAllItems();
        $this->set($rowss);
        $this->render("header");
        $this->render("default");
        $this->render("footer");
    }

    function error() {
        $this->render("error");
    }
}