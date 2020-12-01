<?php
namespace Application\Controllers;

use Core\Controller;
use Core\Model;
use Core\ORM;
use Application\Models\Task;
use Core\ORM\MysqlAdapter;

class TestController extends Controller
{
    function index()
    {
        $testConnection = new MysqlAdapter();
        $testConnection->connect();
        $params = array("item_name" => "build framework");
        echo "success";
    }
}