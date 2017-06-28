<?php
/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 22/06/2017
 * Time: 10:26
 */

namespace App\Schedules;

use App\Enums\ScheduleResult;

class ExampleSchedule extends Schedule
{
    const TIME = '* * * * *';

    protected function scheduleTask()
    {
        // do something
        return ScheduleResult::SUCCESS;
    }
}