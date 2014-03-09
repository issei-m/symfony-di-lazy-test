<?php

require __DIR__ . '/vendor/autoload.php';

use Issei\ContainerBuilder;

$builder = new ContainerBuilder(__DIR__ . '/container');
$container = $builder->build();

var_dump($container->get('foo'));

/** @var $stopwatch \Symfony\Component\Stopwatch\Stopwatch */
$stopwatch = $container->get('stopwatch');
$stopwatch->stop($container->getParameter('stopwatch_event_name'));

var_dump($stopwatch->getSectionEvents($container->getParameter('stopwatch_event_name')));
