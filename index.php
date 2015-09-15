<?php 
mb_internal_encoding("UTF-8");
require_once "lib/database_class.php";
require_once "lib/frontpagecontent_class.php";
require_once "lib/sectioncontent_class.php";
require_once "lib/articlecontent_class.php";
require_once "lib/regcontent_class.php";
require_once "lib/messagecontent_class.php";
require_once "lib/activation_class.php";
require_once "lib/changepasscontent_class.php";
require_once "lib/changepassword_class.php";

$db = new DataBase();
$view = $_GET["view"];
switch($view) {
	case "":
		$content = new FrontPageContent($db);
		break;
	case "section":
		$content = new SectionContent($db);
		break;	
	case "article":
		$content = new ArticleContent($db);
		break;	
	case "reg":
		$content = new RegContent($db);
		break;		
	case "change_pass":
		$content = new ChangePassContent($db);
		break;	
	case "change_password":
		$content = new ChangePassword($db);
		break;	
	case "message":
		$content = new MessageContent($db);
		break;	
	case "activation":
		$content = new Activation($db);
		break;
	default: exit;
}

echo $content->getContent();
?>