<?php
require_once "modules_class.php";

class ChangePassContent extends Modules {

	
	public function __construct($db){
		parent::__construct($db);
	}
	
	protected function getTitle(){
		return "Изменение пароля";
	}
	
	protected function getDescription(){
		return "Изменение пароля пользователя на сайте";
	}
	
	protected function getKeyWords(){
		return "Изменение пароля сайт, Изменение пароля пользователь сайт";
	}	
	
	protected function getMiddle(){
		$sr["message"] = $this->getMessage();
		$sr["login"] = $_SESSION["login"];
		return $this->getReplaceTemplate($sr, "change_pass");
	}
}
?>