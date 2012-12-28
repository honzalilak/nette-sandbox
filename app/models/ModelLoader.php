<?php

use Nette\DI\Container;

/**
 * Model loader
 * @link http://wiki.nette.org/cs/cookbook/dynamicke-nacitani-modelu
 * @author Majkl578
 */
final class ModelLoader
{

    private $container;

    public function __construct(Container $container) {
	
		$this->container = $container;
	
    }

    public function loadModel($modelName) {
        $class = "Model\\" . $modelName;
        return new $class($this->container);
    }

}