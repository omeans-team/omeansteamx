<?php

require_once __DIR__ . '/vendor/autoload.php';

use ErisuAya\Model\Router;
use ErisuAya\Controller\DefaultErisController;
use ErisuAya\Controller\ProductController;
use ErisuAya\Middleware\AuthMiddleware;

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::add('GET', '/', DefaultErisController::class, 'index');
Router::add('GET', '/hello', DefaultErisController::class, 'hello', [AuthMiddleware::class]);
Router::add('GET', '/world', DefaultErisController::class, 'world', [AuthMiddleware::class]);
Router::add('GET', '/about', DefaultErisController::class, 'about');

Router::run();