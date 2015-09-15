<?php
require_once "config_class.php";
require_once "user_class.php";

class Manage {
	
	private $config;
	private $user;
	
	public function __construct($db){
		session_start();
		$this->config = new Config();
		$this->user = new User($db);
		$this->data = $this->secureData(array_merge($_POST, $_GET));
	}
	
	private function secureData($data){
		foreach($data as $key => $value){
			if(is_array($value)) $this->secureData($value);
			else $data[$key] = htmlspecialchars($value);
		}
		return $data;
	}
	
	public function redirect($link){
		header("Location: $link");
		exit;
	}
	
	public function regUser(){
		$link_reg = $this->config->address."?view=reg";
		$captcha = $this->data["captcha"];
		if(($_SESSION["rand"] != $captcha) && ($_SESSION["rand"] != "")){
			return $this->returnMessage("ERROR_CAPTCHA", $link_reg);
		}
		$login = $this->data["login"];
		if($this->user->isExistsUser($login)) return $this->returnMessage("EXISTS_LOGIN", $link_reg);
		$password = $this->data["password"];
		if($password == "") return $this->unknownError($link_reg);
		$password = $this->hashPassword($password);
		$email = $this->data["email"];
		$activkey = md5($this->config->secret.$login);
		$result = $this->user->addUser($login, $password, $email, time(), $activkey);
		if($result){
			$this->getEmailActivation($email, $login);
			return $this->returnPageMessage("SUCCRESS_REG", $this->config->address."?view=message");
		}
		else return $this->unknownError($link_reg);
	}
	
	public function changePass(){
		$link_reg = $this->config->address."?view=change_pass";
		$login = $this->data["login"];
		if(!$this->user->isExistsUser($login)) return $this->returnMessage("NO_EXISTS_LOGIN", $link_reg);
		$ar = $this->user->getUserOnLogin($login);
		$email = $ar["email"];
		$key = md5($this->config->secret.$login);
		$subject = 'Изменение пароля на сайте '.$this->config->address;
		$message = 'Для изменения пароля на сайте '.$this->config->address.' Вам необходимо перейти по ссылке '.$this->config->address.'?view=change_password&login='.$login.'&key='.$key;
		$headers = 'From: webmaster@example.com' . "\r\n" .
					'Reply-To: webmaster@example.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		mail($email, $subject, $message, $headers);
		return $this->returnPageMessage("GET_CHANGE_PASS", $this->config->address."?view=message");
	}
	
	public function changePassword(){
		$login = $this->data["login"];
		$key = $this->data["key"];
		$password = $this->data["password"];
		$password = $this->hashPassword($password);
		if(!$this->getChangePass($key, $login, $password)) return $this->returnPageMessage("UNKNOWN_ERROR", $this->config->address."?view=message");
		return $this->returnPageMessage("CHANGE_PASSWORD", $this->config->address."?view=message");
	}
	
	private function getChangePass($key, $login, $new_pass){
		$id = $this->user->getIDOnLogin($login);
		if($key == md5($this->config->secret.$login)) return $this->user->editUserPass($id, $new_pass);
		return false;
	}
	
	public function getEmailActivation($email, $login){
		$activkey = md5($this->config->secret.$login);
		$subject = 'Активация аккаунта на сайте '.$this->config->address;
		$message = 'Для завершения регистрации на сайте '.$this->config->address.' Вам необходимо перейти по ссылке '.$this->config->address.'?view=activation&activ_key='.$activkey;
		$headers = 'From: webmaster@example.com' . "\r\n" .
					'Reply-To: webmaster@example.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		mail($email, $subject, $message, $headers);
	}
	
	public function login(){
		$login = $this->data["login"];
		$password = $this->data["password"];
		$password = $this->hashPassword($password);
		$r = $_SERVER["HTTP_REFERER"];
		if($this->user->checkUser($login, $password)){
			$_SESSION["login"] = $login;
			$_SESSION["password"] = $password;
			return $r;
		}
		else {
			$_SESSION["error_auth"] = 1;
			return $r;
		}
	}
	
	public function logout(){
		unset($_SESSION["login"]);
		unset($_SESSION["password"]);
		return $_SERVER["HTTP_REFERER"];
	}
	
	private function hashPassword($password){
		return md5($password.$this->config->secret);
	}
	
	private function unknownError($r){
		return $this->returnMessage("UNKNOWN_ERROR", $r);
	}
	
	private function returnMessage($message, $r){
		$_SESSION["message"] = $message;
		return $r;
	}	
	
	private function returnPageMessage($message, $r){
		$_SESSION["page_message"] = $message;
		return $r;
	}
}
?>