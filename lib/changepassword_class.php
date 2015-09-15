<?php
require_once "modules_class.php";

class ChangePassword extends Modules {

	
	public function __construct($db){
		parent::__construct($db);
		$this->change_key = $this->data["key"];
		$this->change_login = $this->data["login"];
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
		$sr["key"] = $this->change_key;
		$sr["login"] = $this->change_login;
		return $this->getReplaceTemplate($sr, "change_password");
	}
}
?>