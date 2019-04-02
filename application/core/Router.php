<?php

namespace application\core;

use application\core\View;

class Router{
	
	protected $routes = [];
	protected $params = [];
	
	protected $internalRoute = [];
	
	function __construct(){
		$arr = require_once 'application/config/routes.php';
		
		foreach($arr as $key => $val){
			$this->add($key, $val);
		}
	}
	
	public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }
	
	public function match(){
		$url = trim($_SERVER['REQUEST_URI'], '/');
		//debug($url);
		foreach ($this->routes as $route => $params){
			if(preg_match($route, $url, $matches)){
				//print_r($matches);
				$this->params = $params;
				//debug($this->params);
				$uri = $this->getURI();
				if(isset($this->params['id'])){
					$this->internalRoute[] = preg_replace($route, $this->params['id'], $uri);
				}
				
				
				//$segments = explode('/', $this->internalRoute);
				
				//debug($internalRoute);
				return true;
			}
		}
		return false;
	}
	
	public function run(){

		if($this->match()){
			$path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
			
			if(class_exists($path)){
				$action = $this->params['action'].'Action';
				//echo $action;
				if(method_exists($path, $action)){
					$controller = new $path($this->params);
					$controller->$action($this->internalRoute);
					//debug($this->params['id']);
				}else{
					View::errorCode(404);
				}
			}else{
				View::errorCode(404);
			}
			
		}else{
			View::errorCode(404);
		}
		
	}
	
	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
		return trim($_SERVER['REQUEST_URI'], '/');
		}
	}
	
}