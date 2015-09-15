<?php
require_once "modules_class.php";

class Activation extends Modules {

	private $activkey;
	
	public function __construct($db){
		parent::__construct($db);
		$this->activkey = $this->data["activ_key"];
	}
	
	protected function getTitle(){
		return "Активация на сайте";
	}
	
	protected function getDescription(){
		return "Активация пользователя на сайте";
	}
	
	protected function getKeyWords(){
		return "Активация сайт, активация пользователь сайт";
	}	
	
	protected function getMiddle(){
		$sr["message"] = $this->getMessage();
		if(!$this->user->validActivKey($this->activkey)) return false;
		return "Успешная активация";
	}
}
?>