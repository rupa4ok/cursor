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
        if ($this->getURI() === '') {
            return (new IndexController())->actionMain();
        }
        return $this->getRoutes() ?: null;
    }
    
    private function getRoutes()
    {
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $this->getURI())) {
                $segments = explode('/', $path);
                $controllerName = ucfirst(array_shift($segments).'Controller');
                $actionName = 'action'.ucfirst((array_shift($segments)));
                $this->includeClass($controllerName);
                $objectName = trim("App\Controllers" . "\ ") . $controllerName;
                return (new $objectName(array_shift($segments)))->$actionName();
            }
        }
    }
    
    private function includeClass($controllerName):void
    {
        $controllerFile = ROOT.'/app/controllers/' .$controllerName. '.php';
        if (file_exists($controllerFile)) {
            include_once($controllerFile);
        }
    }
}
