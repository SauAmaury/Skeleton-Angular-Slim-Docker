<?php

use Slim\Factory\AppFactory;

require __DIR__.'/vendor/autoload.php';

$app = AppFactory::create();

//File for include Middleware

require __DIR__.'/config/middleware.php';

//Files for include routing

require __DIR__.'/config/routes.php';



$app->run();

?>