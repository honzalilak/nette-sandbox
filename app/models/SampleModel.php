<?php

namespace Model;

class SampleModel extends \Nette\Object
{
	/** @var \DibiConnection */
	private $db;



	/**
	 * Insert dependency.
	 *
	 * @param \DibiConnection $db
	 */
	public function __construct(\DibiConnection $db)
	{
		$this->db = $db;
	}



    /**
     * Sample query.
     *
	 * @param int $id
	 * @return \DibiRow
     */
    public function findById($id)
	{
		return $this->db->select("*")
			->from("sample_table")
			->where("id = %i", $id)
			->fetch();
    }
}
