<?php

namespace application\lib;

use PDO;

class Db{
	
	private static $db;
	
	private function __construct(){
		
	}
	private function __clone(){
		
	}
	private function __wakeup(){
		
	}
	public static function getInstance(){
		
		$config = require 'application/config/db.php';
		
		if (null === static::$db) {
            static::$db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].'', $config['user'], $config['password']);
			
        }

        return static::$db;
		
		
	}
	
	public static function qquery($sql, $params = []){
		$stmt = self::$db->prepare($sql);	
		if(!empty($params)){
			foreach($params as $key => $val){
				//echo 'key: '.$key.' => val: '.$val;
				$stmt->bindValue(':'.$key, $val);
			}
		}
		$stmt->execute();
		
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		var_dump($result);
	}
	
	
}