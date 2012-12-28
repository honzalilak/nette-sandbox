<?php

namespace Model;

class SampleModel extends BaseModel
{
    
    /**
     * sample query
     * 
	 * @param int $id
	 * @return 
     */
    public function findById($id) {
        
		return $this->database->select("*")->from("sample_table")->where("id = ", $id)->fetch();

    }
}
