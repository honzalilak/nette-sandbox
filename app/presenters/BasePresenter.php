<?php

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

    /**
     * shortener to be used in presenters
     * makes model accessible via $this->getModel('foo');
     * 
     * @param string $model
     * @return 
     */
    public function getModel($model) {
		return $this->context->modelLoader->loadModel($model);
    }
    

}
