<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * MyContainer
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class MyContainer extends Container
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'bar' => 'getBarService',
            'foo' => 'getFooService',
            'piyo' => 'getPiyoService',
            'stopwatch' => 'getStopwatchService',
        );

        $this->aliases = array();
    }

    /**
     * Gets the 'bar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Issei\Classes\Bar A Issei\Classes\Bar instance.
     */
    protected function getBarService()
    {
        return $this->services['bar'] = new \Issei\Classes\Bar($this->get('piyo'), $this->get('stopwatch'), 'symfony-di');
    }

    /**
     * Gets the 'foo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Issei\Classes\Foo A Issei\Classes\Foo instance.
     */
    protected function getFooService()
    {
        return $this->services['foo'] = new \Issei\Classes\Foo($this->get('bar'), $this->get('stopwatch'), 'symfony-di');
    }

    /**
     * Gets the 'piyo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Issei\Classes\Piyo A Issei\Classes\Piyo instance.
     */
    protected function getPiyoService()
    {
        return $this->services['piyo'] = new \Issei\Classes\Piyo($this->get('stopwatch'), 'symfony-di');
    }

    /**
     * Gets the 'stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance.
     */
    protected function getStopwatchService()
    {
        $this->services['stopwatch'] = $instance = new \Symfony\Component\Stopwatch\Stopwatch();

        $instance->start('symfony-di');

        return $instance;
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritDoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'stopwatch_event_name' => 'symfony-di',
        );
    }
}
