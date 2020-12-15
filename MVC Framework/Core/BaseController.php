<?php
namespace Core;

use Exception;

class BaseController
{
    var $vars = [];
    var $errors = [];
    var $userBaseInfo;

    public function setParameter($data)
    {
        $this->vars = array_merge($this->vars, $data);
    }

    public function setUserBaseInfo($userBaseInfo) 
    {
        $this->userBaseInfo = $userBaseInfo;
    }

    public function setError($error)
    {
        $this->errors[] = $error;
    }

    function render($filename)
    {
        ob_start();
        extract($this->errors);
        extract($this->vars);
        if (file_exists(PATH_ROOT . DS . "Application" . DS . "Views" . DS . $filename . '.php'))
        {
            require(PATH_ROOT . DS . "Application" . DS . "Views" . DS . $filename . '.php');
            return;
        }
        else
        {
            header("location:/error");
        }
    }

    public function checkLogin()
    {
        if (!isset($_SESSION['session_id'])) {
            return false;
        }
        return true;
    }

    private function secure_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    protected function secure_form($form)
    {
        foreach ($form as $key => $value)
        {
            $form[$key] = $this->secure_input($value);
        }
    }

}