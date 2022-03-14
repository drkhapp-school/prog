<?php

const HOME_PATH = '/examples/mvc-example';

header("Content-Security-Policy: frame-ancestors none");
spl_autoload_register();

use controllers\HomeController;

$controllerName = $_GET["controller"];
$action = $_GET["action"];

if (class_exists($controllerName) && method_exists(new $controllerName, $action)) {
  $controller = new $controllerName();
  $controller->$action();
} else {
  $controller = new HomeController();
  $controller->index();
}