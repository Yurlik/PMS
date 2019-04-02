<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;


class Product extends Model{
	
	public function __construct(){		
		parent::__construct();
	}
	
	
	public function getAttribute($vars){
		$result = Db::qquery('SELECT attr_id, value FROM prod_attr WHERE prod_id='.$vars[0]);
		
		foreach($result as $attr){
			//select to db... name & code of attribute
			$res = Db::qquery('SELECT name, code FROM attribute WHERE id='.$attr['attr_id']);
						
			$new = array_merge($attr, $res[0]);
//			var_dump($new);
//			echo '<br>';
			$resultic[] = $new;
			
		}
		
		//$result = $new;
		//debug($resultic);
		return $resultic;
	}
	
	public function getProduct($vars){
		
		$result = Db::qquery('SELECT * FROM products WHERE id='.$vars[0]);
		
		$result[] = $this->getAttribute($vars);
		
		
		return $result;
	}
	
	public function updateProduct($vars){
		//$result = Db::qquery('UPDATE );
		
		if(!empty($_FILES['file']['name'])){
			//var_dump($_FILES);
			$file = new File;						
			$file->savefile();
			$fileName = $file->getName();
			$params['pic_name'] = $fileName;
		}else{
			$pic_name = Db::qquery('SELECT pic_name FROM products WHERE id='.$vars[0]);
			//debug($pic_name[0]['pic_name']);
			$params['pic_name'] = $pic_name[0]['pic_name'];
		}
		
		if(!empty($_POST)){
			
			$params['name'] = $name = $_POST['name'];
			$params['price'] = $price = $_POST['price'];
			$params['description'] = $description = $_POST['description'];
			
			
			//debug($params);
			
			$result = Db::qquery('UPDATE products SET name=:name, price=:price, description=:description, pic_name=:pic_name WHERE id='.$vars[0], $params);
			
			//var_dump($result);
		}else{
			//echo 'show';
		}
		
		
		//var_dump($_POST);
		
		//$this->view->redirect($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
	}
	
	
	public function addProduct(){
		
		if(!empty($_FILES['file']['name'])){
			//var_dump($_FILES);
			$file = new File;						
			$file->savefile();
			$fileName = $file->getName();
			$params['pic_name'] = $fileName;
		}
		
		if(!empty($_POST)){
			
			$params['name'] = $name = $_POST['name'];
			$params['price'] = $price = $_POST['price'];
			$params['description'] = $description = $_POST['description'];
			
			
			//debug($params);
			
			$result = Db::qquery('INSERT INTO products ( name, price, description, pic_name) VALUES (:name, :price, :description, :pic_name)', $params);
			
			//var_dump($result);
		}else{
			//echo 'show';
		}
		
		
		
	}
	
	
	
	
}