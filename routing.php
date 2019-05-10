<?php

/*!
 * Styletools 1.4
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools;

require_once('vendor/autoload.php');

use Styletools\Libs\Router\Router;
use Styletools\Controllers\DefaultController;
use Styletools\Controllers\RegistrationController;

$router = new Router($_GET['url']);

$router->get('/', "Default#indexAction");
$router->get('/register', "Registration#registerAction");
$router->post('/register', "Registration#registerAction");

$router->run();

