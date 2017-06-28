<?php
/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 20/06/2017
 * Time: 10:16
 */

date_default_timezone_set('GMT+0');

require 'vendor/autoload.php';

use App\Controllers\IndexController;
use App\Controllers\ScheduleController;

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

//routes
$app->get('/', [new IndexController(), 'index']);
$app->get('/task/test', [new ScheduleController(), 'test']);

$app->run();