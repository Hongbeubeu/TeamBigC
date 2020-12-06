<?php
namespace Application\Controllers;

use Core\BaseController;
use Core\Model;
use Core\Route;
use Application\Models\Test;

class TestController extends BaseController
{
    function index() {
        $testModel = new Test();
        $rowss = $testModel->getAllItems();
        var_dump($rowss);        
    }
}