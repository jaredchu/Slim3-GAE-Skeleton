<?php

/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 20/06/2017
 * Time: 13:55
 */

namespace App\Controllers;

use Carbon\Carbon;

class Controller
{
    public function json($rp, $data = [], $withTime = true)
    {
        return $rp->write(json_encode($withTime ? array_merge($data, (array)Carbon::now()) : $data));
    }
}