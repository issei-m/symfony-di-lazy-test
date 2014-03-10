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
     * @param boolean $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return Issei\Classes\Piyo A Issei\Classes\Piyo instance.
     */
    public function getPiyoService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['piyo'] = new IsseiClassesPiyo_000000003b2b984600000000746ed91d(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getPiyoService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Issei\Classes\Piyo($this->get('stopwatch'), 'symfony-di');
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

class IsseiClassesPiyo_000000003b2b984600000000746ed91d extends \Issei\Classes\Piyo implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder531d0bb018cd7397949903 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer531d0bb018cd7519515768 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties531d0bb0186fb875148215 = array();

    /**
     * {@inheritDoc}
     */
    public function getFoobar()
    {
        $this->initializer531d0bb018cd7519515768 && $this->initializer531d0bb018cd7519515768->__invoke($this->valueHolder531d0bb018cd7397949903, $this, 'getFoobar', array(), $this->initializer531d0bb018cd7519515768);

        return $this->valueHolder531d0bb018cd7397949903->getFoobar();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer531d0bb018cd7519515768 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer531d0bb018cd7519515768 && $this->initializer531d0bb018cd7519515768->__invoke($this->valueHolder531d0bb018cd7397949903, $this, '__get', array('name' => $name), $this->initializer531d0bb018cd7519515768);

        if (isset(self::$publicProperties531d0bb0186fb875148215[$name])) {
            return $this->valueHolder531d0bb018cd7397949903->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder531d0bb018cd7397949903;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder531d0bb018cd7397949903;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer531d0bb018cd7519515768 && $this->initializer531d0bb018cd7519515768->__invoke($this->valueHolder531d0bb018cd7397949903, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer531d0bb018cd7519515768);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder531d0bb018cd7397949903;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder531d0bb018cd7397949903;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer531d0bb018cd7519515768 && $this->initializer531d0bb018cd7519515768->__invoke($this->valueHolder531d0bb018cd7397949903, $this, '__isset', array('name' => $name), $this->initializer531d0bb018cd7519515768);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder531d0bb018cd7397949903;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder531d0bb018cd7397949903;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer531d0bb018cd7519515768 && $this->initializer531d0bb018cd7519515768->__invoke($this->valueHolder531d0bb018cd7397949903, $this, '__unset', array('name' => $name), $this->initializer531d0bb018cd7519515768);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder531d0bb018cd7397949903;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder531d0bb018cd7397949903;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer531d0bb018cd7519515768 && $this->initializer531d0bb018cd7519515768->__invoke($this->valueHolder531d0bb018cd7397949903, $this, '__clone', array(), $this->initializer531d0bb018cd7519515768);

        $this->valueHolder531d0bb018cd7397949903 = clone $this->valueHolder531d0bb018cd7397949903;
    }

    public function __sleep()
    {
        $this->initializer531d0bb018cd7519515768 && $this->initializer531d0bb018cd7519515768->__invoke($this->valueHolder531d0bb018cd7397949903, $this, '__sleep', array(), $this->initializer531d0bb018cd7519515768);

        return array('valueHolder531d0bb018cd7397949903');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer531d0bb018cd7519515768 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer531d0bb018cd7519515768;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer531d0bb018cd7519515768 && $this->initializer531d0bb018cd7519515768->__invoke($this->valueHolder531d0bb018cd7397949903, $this, 'initializeProxy', array(), $this->initializer531d0bb018cd7519515768);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder531d0bb018cd7397949903;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder531d0bb018cd7397949903;
    }


}
