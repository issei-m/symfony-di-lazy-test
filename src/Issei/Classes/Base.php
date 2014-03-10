<?php

namespace Issei\Classes;

use Symfony\Component\Stopwatch\Stopwatch;

class Base
{
    public function __construct(Stopwatch $stopwatch, $stopwatchEventName)
    {
        $periods = $stopwatch->lap($stopwatchEventName)->getPeriods();
        $lapPeriod = end($periods);

        echo sprintf('%s initialized (%.4f ms)<br>', get_class($this), $lapPeriod->getDuration());
    }
}
