<?php
require_once "global_class.php";

class User extends GlobalClass {
	
	public function __construct($db){
		parent::__construct("users", $db);
	}
	
	public function addUser($login, $password, $email, $regdate, $activkey){
		if(!$this->checkValid($login, $password, $regdate)) return false;
		return $this->add(array("login" => $login, "password" => $password, "email" => $email, "regdate" => $regdate, "activ-key" => $activkey));
	}
	
	public function editUser($id, $login, $password, $regdate){
		if(!$this->checkValid($login, $password, $regdate)) return false;
		return $this->edit($id, array("login" => $login, "password" => $password, "regdate" => $regdate));
	}	
	
	public function editUserPass($id, $password){
		if(!$this->valid->validHash($password)) return false;
		return $this->edit($id, array("password" => $password));
	}
	
	public function isExistsUser($login){
		return $this->isExists("login", $login);
	}
	
	public function checkUser($login, $password){
		$user = $this->getUserOnLogin($login);
		if(!$user) return false;
		if($user["activ-key"] != "") return false;
		return $user["password"] === $password;
	}
	
	public function getUserOnLogin($login){
		$id = $this->getField("id", "login", $login);
		return $this->get($id);
	}		
	
	public function getIDOnLogin($login){
		return $this->getField("id", "login", $login);
	}	
	
	
	
	private function checkValid($login, $password, $regdate){
		if(!$this->valid->validLogin($login)) return false;
		if(!$this->valid->validHash($password)) return false;
		if(!$this->valid->validTimeStamp($regdate)) return false;
		return true;
	}
	
	public function validActivKey($key){
		if(!$this->isExists("activ-key", $key)) return false;
		$id = $this->getField("id", "activ-key", $key);
		return $this->edit($id, array("activ-key" => ""));
	}
}
?>