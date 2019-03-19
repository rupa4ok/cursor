<?php

namespace App\Router;

use App\controllers\IndexController;

/**
 * Class Router
 * @package App\Router\Router
 */
class Router
{
    /**
     * @var mixed
     */
    private $routes;
    
    public function __construct()
    {
        $routesPath = ROOT.'/app/config/routes.php';
        $this->routes = include($routesPath);
    }
    
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
    
    public function run()
    {
        $uri = $this->getURI();
    
        if ($uri == '') {
            $controllerObject = new IndexController();
            $result = $controllerObject->actionMain();
        }

        foreach ($this->routes as $uriPattern => $path) {
            if(preg_match("~$uriPattern~", $uri)) {
                $segments = explode('/', $path);
                $segments2 = explode('/', $path);
                
                $view = array_shift($segments2);
                
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                
                $actionName = 'action'.ucfirst((array_shift($segments)));
    
                $controllerFile = ROOT.'/app/controllers/' .$controllerName. '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
                $objectName = trim("App\Controllers" . "\ ") . $controllerName;
                $controllerObject = new $objectName($view);
                $result = $controllerObject->$actionName();
                
                if ($result != null) {
                    break;
                }
            }
        }
    }
}