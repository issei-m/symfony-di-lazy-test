<?php

namespace Issei\Classes;

use Symfony\Component\Stopwatch\Stopwatch;

class Base
{
    public function __construct(Stopwatch $stopwatch, $stopwatchEventName)
    {
        $stopwatch->lap($stopwatchEventName);
    }
}
