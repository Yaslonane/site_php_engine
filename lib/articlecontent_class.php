<?php
require_once "modules_class.php";

class ArticleContent extends Modules {
	
	private $section_info;
	
	public function __construct($db){
		parent::__construct($db);
		$this->article_info = $this->article->get($this->data["id"]);
	}
	
	protected function getTitle(){
		return $this->article_info["title"];
	}
	
	protected function getDescription(){
		return $this->article_info["meta_desc"];
	}
	
	protected function getKeyWords(){
		return $this->article_info["meta_key"];
	}	
	
	protected function getMiddle(){
		return $this->getArticle();
	}
	
	private function getArticle(){
		$sr["title"] = $this->article_info["title"];
		$sr["img_prew"] = $this->article_info["img_prew"];
		$sr["full_text"] = $this->article_info["full_text"];
		$sr["date"] = $this->formatDate($this->article_info["date"]);
		return $this->getReplaceTemplate($sr, "article");
	}
}
?>