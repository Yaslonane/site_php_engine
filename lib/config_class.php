<?php 

class Config {
	
	var $sitename = "Test.local";
	var $address = "http://site.test/";
	var $secret = "dog9999";
	var $host = "localhost";
	var $db = "site";
	var $db_prefix = "site_";
	var $user = "mysql";
	var $password = "mysql";
	var $admname = "Защепкин Андрей";
	var $admemail = "yaslonane@yandex.ru";
	var $dir_img = "img/"; //путь к картинкам статей
	var $dir_text = "lib/text/"; //путь к сообщениям 
	var $dir_tmpl = "tmpl/"; //путь к шаблону
	var $count_blog = 3; //количество статей на странице
	
	var $min_login = 3;
	var $max_login = 150;
}

?>