<?php

namespace Issei;

use Symfony\Component\Config\ConfigCache;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class ContainerBuilder
{
    private $containerDir;

    public function __construct($containerDir)
    {
        $this->containerDir = $containerDir;
    }

    /**
     * @return ContainerInterface
     */
    public function build()
    {
        $class = 'MyContainer';
        $cache = new ConfigCache($this->containerDir . '/' . $class . '.php', true);

        if (!$cache->isFresh()) {
            $builder = new \Symfony\Component\DependencyInjection\ContainerBuilder();

            $loader = new YamlFileLoader($builder, new FileLocator($this->containerDir));
            $loader->load('services.yml');

            $builder->compile();

            $dumper = new PhpDumper($builder);
            $cache->write($dumper->dump(['class' => $class, 'base_class' => 'Container']));
        }

        require_once $cache;

        return new $class;
    }
}
