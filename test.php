<?php
/*
class MyClass {
	
    public $prop1 = "Свойство класса";    // Свойства и методы класса
	
	public static $count = 0;
	
	public function __construct() {
		echo "Создан объект класса ".__CLASS__ ."<br />";
	}
	
	public function __destruct() {
		echo "Объект класса ".__CLASS__ ." удален <br />";
	}
	
	public function __toString() {
		echo "Используем метод toString: ";
		return $this->getProperty();
	}
	
	public function setProperty($newval) {
		$this->prop1 = $newval;
	}
	
	private function getProperty() {
		return $this->prop1 ."<br />";
	}
	
	public static function plusOne() {
		return "count = ".++self::$count . "<br />";
	}
}

class MyOtherClass extends MyClass {
	
	public function __construct() {
		parent::__construct();
		echo "Новый конструктор в классе ".__CLASS__ ."<br />";
	}
	
	public function newMethod() {
		echo "Из нового метода класса ".__CLASS__ ."<br />";
	}
	
	public function callProperty() {
		return $this->getProperty();
	}
}

do {
	echo MyClass::plusOne();
}
while(MyClass::$count < 10);


function printResultSet($result_set){
	echo "Количество записей: ".$result_set->num_rows."<br />";
	while (($row = $result_set->fetch_assoc()) != false){
		print_r($row);
		echo "<br />";
	}
	echo "------------------------------<br />";
}

$mysqli = new mysqli("localhost", "mysql", "mysql", "site");
$mysqli->query("SET NAMES 'utf8'");
$result_set = $mysqli->query("SELECT * FROM `site_articles`");
printResultSet($result_set);
$mysqli->close();

*/

require_once "lib/database_class.php";
require_once "lib/config_class.php";
require_once "lib/modules_class.php";
require_once "lib/checkvalid_class.php";

$get = new DataBase();
$l = new CheckValid();

$z = $l->validHash(md5("123"));
var_dump($z);



//print_r($get->select("articles", array("*")));
//print_r($get->getAll("articles", "date", false));


?>

<?php /*
$server = 'localhost'; 
$user = 'mysql'; 
$password = 'mysql'; 

$dblink = mysql_connect($server, $user, $password); 

if($dblink) 
echo 'Соединение установлено.'; 
else 
die('Ошибка подключения к серверу баз данных.'); 

$database = 'site'; 
$selected = mysql_select_db($database, $dblink); 
if($selected) 
echo ' Подключение к базе данных прошло успешно.'; 
else 
die(' База данных не найдена или отсутствует доступ.'); */
?>





