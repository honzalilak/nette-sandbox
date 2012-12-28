<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
        
        $this->template->variable = $this->getModel('SampleModel')->findById(1);
        
	}

}
