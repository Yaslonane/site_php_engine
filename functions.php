<?php
require_once "lib/database_class.php";
require_once "lib/manage_class.php";

$db = new DataBase();
$manage = new Manage($db);
if($_POST["reg"]){
	$r = $manage->regUser(); 
}
elseif($_POST["auth"]){
	$r = $manage->login(); 
}
elseif($_GET["logout"]){
	$r = $manage->logout(); 
}
elseif($_POST["change_pass"]){
	$r = $manage->changePass(); 
}
elseif($_POST["change_password"]){
	$r = $manage->changePassword(); 
}
else exit;
$manage->redirect($r);
?>