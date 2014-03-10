<?php

namespace Issei\Classes;

use Symfony\Component\Stopwatch\Stopwatch;

class Bar extends Base
{
    /**
     * @var Piyo
     */
    private $piyo;

    public function __construct(Piyo $piyo, Stopwatch $stopwatch, $stopwatchEventName)
    {
        $this->piyo = $piyo;
        parent::__construct($stopwatch, $stopwatchEventName);
    }

    public function hoge()
    {
        return $this->piyo->getFoobar();
    }
}
