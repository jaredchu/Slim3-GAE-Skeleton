<?php

/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 20/06/2017
 * Time: 13:55
 */

namespace App\Controllers;

use App\Config;
use Carbon\Carbon;

class Controller
{
    public function json($rp, $data = [], $withTime = true)
    {
        if (Config::ALLOW_CROSS_ORIGIN) {
            $rp = $rp->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        }

        return $rp->withJson($withTime ? array_merge($data, (array)Carbon::now()) : $data);
    }
}