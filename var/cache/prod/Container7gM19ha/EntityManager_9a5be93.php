<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder732ea = null;
    private $initializer1717a = null;
    private static $publicPropertiesde5e0 = [
        
    ];
    public function getConnection()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getConnection', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getMetadataFactory', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getExpressionBuilder', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'beginTransaction', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getCache', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getCache();
    }
    public function transactional($func)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'transactional', array('func' => $func), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'commit', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->commit();
    }
    public function rollback()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'rollback', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getClassMetadata', array('className' => $className), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'createQuery', array('dql' => $dql), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'createNamedQuery', array('name' => $name), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'createQueryBuilder', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'flush', array('entity' => $entity), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'clear', array('entityName' => $entityName), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->clear($entityName);
    }
    public function close()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'close', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->close();
    }
    public function persist($entity)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'persist', array('entity' => $entity), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'remove', array('entity' => $entity), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'refresh', array('entity' => $entity), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'detach', array('entity' => $entity), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'merge', array('entity' => $entity), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'contains', array('entity' => $entity), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getEventManager', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getConfiguration', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'isOpen', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getUnitOfWork', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getProxyFactory', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'initializeObject', array('obj' => $obj), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'getFilters', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'isFiltersStateClean', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, 'hasFilters', array(), $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        return $this->valueHolder732ea->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer1717a = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder732ea) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder732ea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder732ea->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer1717a && ($this->initializer1717a->__invoke($valueHolder732ea, $this, '__get', ['name' => $name], $this->initializer1717a) || 1) && $this->valueHolder732ea = $valueHolder732ea;
        if (isset(self::$publicPropertiesde5e0[$name])) {
            return $this->valueHolder732ea->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
