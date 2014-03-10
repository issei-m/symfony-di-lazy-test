<?php

namespace Issei\Classes;

use Symfony\Component\Stopwatch\Stopwatch;

class Piyo extends Base
{
    public function __construct(Stopwatch $stopwatch, $stopwatchEventName)
    {
        usleep(500000);

        parent::__construct($stopwatch, $stopwatchEventName);
    }

    public function getFoobar()
    {
        return 'Foobar!';
    }
}
