<?php

/**
 * Created by PhpStorm.
 * User: jaredchu
 * Date: 22/06/2017
 * Time: 10:25
 */

namespace App\Schedules;

use Cron\CronExpression;
use App\Enums\ScheduleResult as Result;

class Schedule
{
    /**
     * *    *    *    *    *    *
     * -    -    -    -    -    -
     * |    |    |    |    |    |
     * |    |    |    |    |    + year [optional]
     * |    |    |    |    +----- day of week (0 - 7) (Sunday=0 or 7)
     * |    |    |    +---------- month (1 - 12)
     * |    |    +--------------- day of month (1 - 31)
     * |    +-------------------- hour (0 - 23)
     * +------------------------- min (0 - 59)
     */
    const TIME = '* * * * *';

    /**
     * @return int
     */
    public function run()
    {
        if (!$this->isDue()) return Result::NOT_IN_TIME;
        else {
            return $this->scheduleTask();
        }
    }


    /**
     * @return int
     */
    protected function scheduleTask()
    {
        return Result::SUCCESS;
    }

    /**
     * @return bool
     */
    protected function isDue()
    {
        return CronExpression::factory(static::TIME)->isDue();
    }
}