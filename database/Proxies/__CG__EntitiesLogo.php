<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Logo extends \Entities\Logo implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Persistence\Proxy::__isInitialized
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
            return ['__isInitialized__', '' . "\0" . 'Entities\\Logo' . "\0" . 'original_name', '' . "\0" . 'Entities\\Logo' . "\0" . 'stored_name', '' . "\0" . 'Entities\\Logo' . "\0" . 'uploaded_by', '' . "\0" . 'Entities\\Logo' . "\0" . 'uploaded_at', '' . "\0" . 'Entities\\Logo' . "\0" . 'width', '' . "\0" . 'Entities\\Logo' . "\0" . 'height', '' . "\0" . 'Entities\\Logo' . "\0" . 'id', '' . "\0" . 'Entities\\Logo' . "\0" . 'customer', '' . "\0" . 'Entities\\Logo' . "\0" . 'type'];
        }

        return ['__isInitialized__', '' . "\0" . 'Entities\\Logo' . "\0" . 'original_name', '' . "\0" . 'Entities\\Logo' . "\0" . 'stored_name', '' . "\0" . 'Entities\\Logo' . "\0" . 'uploaded_by', '' . "\0" . 'Entities\\Logo' . "\0" . 'uploaded_at', '' . "\0" . 'Entities\\Logo' . "\0" . 'width', '' . "\0" . 'Entities\\Logo' . "\0" . 'height', '' . "\0" . 'Entities\\Logo' . "\0" . 'id', '' . "\0" . 'Entities\\Logo' . "\0" . 'customer', '' . "\0" . 'Entities\\Logo' . "\0" . 'type'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Logo $proxy) {
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
    public function getOriginalName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalName', []);

        return parent::getOriginalName();
    }

    /**
     * {@inheritDoc}
     */
    public function getStoredName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStoredName', []);

        return parent::getStoredName();
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadedBy', []);

        return parent::getUploadedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadedAt', []);

        return parent::getUploadedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidth', []);

        return parent::getWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', []);

        return parent::getHeight();
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
    public function getCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', []);

        return parent::getCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function getShardedPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShardedPath', []);

        return parent::getShardedPath();
    }

    /**
     * {@inheritDoc}
     */
    public function getFullPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullPath', []);

        return parent::getFullPath();
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalName($originalName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalName', [$originalName]);

        return parent::setOriginalName($originalName);
    }

    /**
     * {@inheritDoc}
     */
    public function setStoredName($storedName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStoredName', [$storedName]);

        return parent::setStoredName($storedName);
    }

    /**
     * {@inheritDoc}
     */
    public function setUploadedBy($uploadedBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUploadedBy', [$uploadedBy]);

        return parent::setUploadedBy($uploadedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function setUploadedAt($uploadedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUploadedAt', [$uploadedAt]);

        return parent::setUploadedAt($uploadedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function setWidth($width)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidth', [$width]);

        return parent::setWidth($width);
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight($height)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', [$height]);

        return parent::setHeight($height);
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomer(\Entities\Customer $customer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomer', [$customer]);

        return parent::setCustomer($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

}
