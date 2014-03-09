<?php

namespace Issei\Classes;

use Symfony\Component\Stopwatch\Stopwatch;

class Piyo extends Base
{
    public function __construct(Stopwatch $stopwatch, $stopwatchEventName)
    {
//        sleep(1);

        parent::__construct($stopwatch, $stopwatchEventName);
    }
}
