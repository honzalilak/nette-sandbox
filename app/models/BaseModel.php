<?php

namespace Model;

/**
 * Base model
 * @link http://wiki.nette.org/cs/cookbook/dynamicke-nacitani-modelu
 * @author Majkl578
 */
abstract class BaseModel extends \Nette\Object
{
    /** @var \Nette\DI\Container */
    private $context;

    public function __construct(\Nette\DI\Container $container)
    {
        $this->context = $container;
    }

    /**
     * @return \Nette\DI\Container
     */
    final public function getContext()
    {
        return $this->context;
    }

    /**
     * @return \DibiConnection
     */
    final public function getDatabase()
    {
        return $this->context->database;
    }

    /**
     * @return \DibiConnection
     */
    final public function getDb()
    {
        return $this->context->database;
    }
	
    /**
     * shortener to be used in models
     * makes model accessible via $this->getModel('foo');
     * 
     * @param string $model
     * @return 
     */
    public function getModel($model) {
	
		return $this->context->modelLoader->loadModel($model);
    }
    


}