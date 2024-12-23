<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder732ea = null;
    private $initializer1717a = null;
    private static $publicPropertiesde5e0 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getList', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getInstalledModules', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getMustBeConfiguredModules', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getUpgradableModules', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'setActionUrls', array('collection' => $collection), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer1717a = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder732ea) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder732ea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder732ea->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, '__get', ['name' => $name], $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        if (isset(self::$publicPropertiesde5e0[$name])) {
            return $this->valueHolder732ea->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder732ea;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder732ea;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder732ea;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder732ea;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, '__isset', array('name' => $name), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder732ea;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder732ea;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, '__unset', array('name' => $name), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder732ea;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder732ea;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, '__clone', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        $this->valueHolder732ea = clone $this->valueHolder732ea;
    }
    public function __sleep()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, '__sleep', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return array('valueHolder732ea');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1717a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1717a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'initializeProxy', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder732ea;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder732ea;
    }
}
