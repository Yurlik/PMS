<?php

namespace application\controllers;

use application\core\Controller;

use application\lib\Db;

class ProductsController extends Controller{
	
	
	public function showAllAction(){
		
		$result = $this->model->getProducts();
		
//		$params = [
//			
//			'id' => '2',
//			
//		];
//		
//		//$db = new Db;
//		$dbh = Db::GetInstance();
//		$result = Db::qquery('SELECT * FROM products WHERE id = :id', $params);
//
		$vars = [
			
			'products' => $result,
			
		];
		
		$this->view->render('Show all products', $vars);
		//$this->view->render('Show all products');
	}
	
	
	
}