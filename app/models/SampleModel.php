<?php

namespace Model;

class SampleModel extends \Nette\Object
{
	/** @var \DibiConnection */
	private $db;
	
	
	
	public function __construct(\DibiConnection $db) {
		
		$this->db = $db;
		
	}
    
	
	
    /**
     * sample query
     * 
	 * @param int $id
	 * @return 
     */
    public function findById($id) {
        
		return $this->db->select("*")->from("sample_table")->where("id = ", $id)->fetch();

    }
}
