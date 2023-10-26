<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use ecomercedesafio\Controllers\ClientesController;

$app = AppFactory::create();

$app->get('/', ClientesController::class . ':get');


$app->run();
