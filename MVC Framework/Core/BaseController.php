<?php
namespace Core;

use Exception;

class BaseController
{
    var $vars = [];
    var $layout = "default";

    function set($data)
    {
        $this->vars = array_merge($this->vars, $data);
    }

    function render($filename)
    {
        ob_start();
        extract($this->vars);
        if (file_exists(PATH_ROOT . DS . "Application" . DS . "Views" . DS . "Layouts" . DS . $filename . '.php'))
        {
            require(PATH_ROOT . DS . "Application" . DS . "Views" . DS . "Layouts" . DS . $filename . '.php');
        }
        else
        {
            $href = 'http://mvctestbed/error';
            echo "sai con me may file name roi thang ngu <br>";
            echo "<a href = {$href}> link </a>";
        }

        //$content = ob_get_contents();
        //ob_end_clean();
        //return $content;
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