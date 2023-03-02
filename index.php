<?php
declare(strict_types = 1);

require __DIR__ . './vendor/autoload.php';

use PHP_Final_Project\Frameworks\DIContainer;
use PHP_Final_Project\Frameworks\Router;

$container = new DIContainer();
$router = new Router($container);
$router->process($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);