<?php
/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 20/06/2017
 * Time: 10:16
 */

require 'vendor/autoload.php';

date_default_timezone_set('GMT+0');
error_reporting(\App\Config::DEBUG ? -1 : 0);

use App\Controllers\IndexController;
use App\Controllers\ScheduleController;

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => \App\Config::DEBUG
    ]
]);

//routes
$app->get('/', [new IndexController(), 'index']);
$app->get('/health_check', [new IndexController(), 'healthCheck']);
$app->get('/task/test', [new ScheduleController(), 'test']);

$app->run();