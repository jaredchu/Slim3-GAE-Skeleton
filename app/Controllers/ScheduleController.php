<?php
/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 28/06/2017
 * Time: 09:08
 */

namespace App\Controllers;

use App\Config;
use App\Enums\XSType;
use App\Schedules\ExampleSchedule;
use App\Utils\XSParser;
use Carbon\Carbon;
use JC\JCRequest as Request;
use JCFirebase\JCFirebase;

class ScheduleController extends Controller
{
    public function test($rq, $rp, $args)
    {
        $this->json($rp, ['scheduleResult' => (new ExampleSchedule())->run()]);
    }
}