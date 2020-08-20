<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Vendor extends \Entities\Vendor implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'name', 'id', 'Switches', 'consoleServers', 'bundle_name', '' . "\0" . 'Entities\\Vendor' . "\0" . 'shortname', '' . "\0" . 'Entities\\Vendor' . "\0" . 'nagios_name'];
        }

        return ['__isInitialized__', 'name', 'id', 'Switches', 'consoleServers', 'bundle_name', '' . "\0" . 'Entities\\Vendor' . "\0" . 'shortname', '' . "\0" . 'Entities\\Vendor' . "\0" . 'nagios_name'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Vendor $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function addSwitche(\Entities\Switcher $switches)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSwitche', [$switches]);

        return parent::addSwitche($switches);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSwitche(\Entities\Switcher $switches)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSwitche', [$switches]);

        return parent::removeSwitche($switches);
    }

    /**
     * {@inheritDoc}
     */
    public function getSwitches()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSwitches', []);

        return parent::getSwitches();
    }

    /**
     * {@inheritDoc}
     */
    public function setShortname($shortname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShortname', [$shortname]);

        return parent::setShortname($shortname);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortname', []);

        return parent::getShortname();
    }

    /**
     * {@inheritDoc}
     */
    public function setNagiosName($nagiosName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNagiosName', [$nagiosName]);

        return parent::setNagiosName($nagiosName);
    }

    /**
     * {@inheritDoc}
     */
    public function getNagiosName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNagiosName', []);

        return parent::getNagiosName();
    }

    /**
     * {@inheritDoc}
     */
    public function addSwitch(\Entities\Switcher $switches)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSwitch', [$switches]);

        return parent::addSwitch($switches);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSwitch(\Entities\Switcher $switches)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSwitch', [$switches]);

        return parent::removeSwitch($switches);
    }

    /**
     * {@inheritDoc}
     */
    public function getBundleName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBundleName', []);

        return parent::getBundleName();
    }

    /**
     * {@inheritDoc}
     */
    public function setBundleName(string $bundle_name = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBundleName', [$bundle_name]);

        return parent::setBundleName($bundle_name);
    }

    /**
     * {@inheritDoc}
     */
    public function addConsoleServer(\Entities\ConsoleServer $consoleServer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addConsoleServer', [$consoleServer]);

        return parent::addConsoleServer($consoleServer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeConsoleServer(\Entities\ConsoleServer $consoleServer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeConsoleServer', [$consoleServer]);

        return parent::removeConsoleServer($consoleServer);
    }

    /**
     * {@inheritDoc}
     */
    public function getConsoleServers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConsoleServers', []);

        return parent::getConsoleServers();
    }

}
