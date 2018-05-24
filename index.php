<?php
session_start();

error_reporting(0);

require __DIR__ . '/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', $uri);

$ctrl = !empty($parts[1]) ? ucfirst($parts[1]) : 'Page'; //контроллер
$action = !empty($parts[2]) ? ucfirst($parts[2]) : 'Default';//экшен
$data = $parts[3];

try {
    $controllerClassName = '\App\Controllers\\' . $ctrl;
    $controller = new $controllerClassName();
    $controller->action($action, $data);
}catch (Error $e){
    exit('Произошла ошибка!');
}