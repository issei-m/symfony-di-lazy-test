<?php

namespace Issei\Classes;

use Symfony\Component\Stopwatch\Stopwatch;

class Foo extends Base
{
    /**
     * @var Bar
     */
    private $bar;

    public function __construct(Bar $bar, Stopwatch $stopwatch, $stopwatchEventName)
    {
        $this->bar = $bar;
        parent::__construct($stopwatch, $stopwatchEventName);
    }

    public function hoge()
    {
        return $this->bar->hoge();
    }
}
