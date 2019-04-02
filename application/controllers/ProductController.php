<?php

namespace application\controllers;

use application\core\Controller;

class ProductController extends Controller{
	
	
	public function showAction($params){
		$result = $this->model->getProduct($params);
		$vars = [			
			'product' => $result,			
		];
		$this->view->render('Show product', $vars);
		//debug($params);
	}
	
	public function editAction($params){
		//var_dump($params);
		// get $_POST form data... if isset update
		//    $result = $this->model->updateProduct($params);  updateProduct  -  in Product.php
		$result = $this->model->updateProduct($params);
		
		
		//     upload new file
		//$file = new File;
		
		
		
		$result = $this->model->getProduct($params);
		$vars = [			
			'product' => $result,			
		];
		$this->view->render('Edit product', $vars);
		
	}
	
	public function addAction(){
		
		$result = $this->model->addProduct();
		
		$this->view->render('Add product');
	}
	
	
	
}