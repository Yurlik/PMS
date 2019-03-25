<?php

namespace application\controllers;

use application\core\Controller;

class ProductController extends Controller{
	
	
	public function showAction(){
		$this->view->render('Show product');
	}
	
	public function editAction(){
		$this->view->render('Edit product');
	}
	
	public function addAction(){
		$this->view->render('Add product');
	}
	
	
	
}