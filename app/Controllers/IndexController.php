<?php

/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 20/06/2017
 * Time: 13:55
 */

namespace App\Controllers;

class IndexController extends Controller
{
    public function index($rq, $rp, $args)
    {
        return $this->json($rp);
    }

    public function healthCheck($rq, $rp, $args)
    {
        return $this->json($rp, [
            'execution_time' => microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]
        ]);
    }
}