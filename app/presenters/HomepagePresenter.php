<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
	/** @var Model\SampleModel */
	private $sampleModel;



	/**
	 * Inject dependency.
	 *
	 * @param Model\SampleModel $sampleModel
	 */
	public function injectModel(Model\SampleModel $sampleModel)
	{
		$this->sampleModel = $sampleModel;
	}



	public function renderDefault()
	{
        $this->template->variable = $this->sampleModel->findById(1);
	}
}
