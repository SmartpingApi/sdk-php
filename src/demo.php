<?php

namespace SmartpingApi;

use Symfony\Component\Dotenv\Dotenv;

require 'vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->loadEnv(realpath(__DIR__ . '/.env'));

$app = new SmartpingAPI($_ENV['APP_ID'], $_ENV['APP_KEY']);
//$app->authenticate();
//var_dump($app->getPlayer('1610533'));
//var_dump($app->findPlayersByClub('10160051'));
