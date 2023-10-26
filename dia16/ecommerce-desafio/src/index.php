<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Douglas\EcommerceDesafio\Config\Routes;

$app = AppFactory::create();

Routes::render($app);

$app->run();

//01:05