<?php
include_once ('model.class.php');
include_once ('template.class.php');
include_once (ROOT . DS . 'application' . DS . 'models'. DS . 'Item.php');
class Controller {
 
    protected $_model;
    protected $_controller;
    protected $_action;
    protected $_template;
 
    function __construct($model, $controller, $action) {
 
        $this->_controller = $controller;
        $this->_action = $action;
        $this->_model = $model;
 
        $this->_model = new $model;
        $this->_template = new Template($controller,$action);
 
    }
 
    function set($name,$value) {
        $this->_template->set($name,$value);
    }
 
    function __destruct() {
            $this->_template->render();
    }
 
}
