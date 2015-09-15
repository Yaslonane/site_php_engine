<?php
require_once "global_class.php";

class Article extends GlobalClass {
	
	public function __construct($db){
		parent::__construct("articles", $db);
	}
	
	public function getAllSortDate(){
		return $this->getAll("date", false);
	}
	
	public function getAllOnSectionID($section_id){
		return $this->getAllOnField("sections_id", $section_id, "date", false);
	}
	
	public function getElementOnID($id, $field){
		return $this->db->getField("articles", $field, "id", $id);
	}	
	
	public function setElementOnID($id, $field, $value){
		return $this->setFieldOnID($id, $field, $value);
	}

}
?>