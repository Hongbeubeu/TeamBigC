<?php
namespace Application\Controllers;

use Core\BaseController;
use Core\Model;
use Core\Route;
use Application\Models\Task;
use Core\ORM\QueryBuilder;

class TestController extends BaseController
{
    function index() {
        $db = QueryBuilder::getInstance();
        //$db->delete('items', [['id', '<', 3]]);
        $rows = $db->table('items')->get();
        foreach ($rows as $row) {
            echo "$row->item_name <br>";
        }
        echo "success";
    }
}