<?php
namespace Core;
class Route
{
    /**
     * 
     * -Array contain route of application
     * -Each rout have url, method, action and params
     * 
     */
    private array $routes;

    //Constructor
    public function __construct(){
        $this->routes = [];
    }

    /**
     * GET method
     * 
     * @param string $url URL need to be compare
     * @param string|callable $action retrive while URL called. May be a callback or a method in controller
     * 
     * @return void
     */
    public function get(string $url, $action){
        $this->request($url, 'GET', $action);
    }

    /**
     * POST method
     * 
     * @param string $url URL need to be compare
     * @param string|callable $action retrived while URL is called. May be a callback or a method in controller
     * 
     * @return void
     */
    public function post(string $url, $action){
        $this->request($url, 'POST', $action);
    }

    /**
     * Handle request
     * 
     * @param string $url URL need to be compare
     * @param string|callable $action retrived while URL is called. Maybe a callback ỏ a method in controller
     * 
     * @return void
     */
    private function request(string $url, string $method, $action)
    {
        //Check if the URL contains params
        if (preg_match_all('/({([\w]+)})/', $url, $params)){
            $url = preg_replace('/({([\w]+)})/', '(.+)', $url);
        }

        //Replace all / by \/(regex) in URL
        $url = str_replace('/', '\/', $url);

        $route = [
            'url' => $url,
            'method' => $method,
            'action' => $action,
            'params' => $params[2]
        ];

        array_push($this->routes, $route);
    }

    /**
     * Function to handle when a request is called
     *
     * @param string $url URL is call to server
     * @param string $method method is called. GET | POST
     *
     * @return void
     */
    public function map(string $url, string $method)
    {
        // Loop through the routes
        foreach ($this->routes as $route) {

            // If route has $method
            if ($route['method'] == $method) {
                //Checks the current route is the url being called.
                $reg = '/^' . $route['url'] . '$/';
                if (preg_match($reg, $url, $params)) {
                    array_shift($params);
                    $this->callActionRoute($route['action'], $params);
                    return;
                }
            }
        }
        //If the request does not match any of the routes
        echo '404 - Not found';
    }

    /**
     *
     * The function calls the action route
     *
     * @param string|callable $action action of route
     * @param array $params param on url
     *
     * @return void
     *
     */
    private function callActionRoute($action, $params)
    {
        // If $action is a callback.
        if (is_callable($action)) {
            call_user_func_array($action, $params);
            return;
        }

        //If $action is a method of controller. 
        if (is_string($action)) {
            $action = explode('@', $action);
            $controller_name = 'Application' . DS . 'Controllers' . DS . $action[0];
            $controller = new $controller_name();
            call_user_func_array([$controller, $action[1]], $params);
            return;
        }
    }
}