<?php

namespace application\models;

class File{
		
	//upload directory
	private $uploadDir = 'img';
	
	private $name = '';
	private $tmpname = '';
	
	public function getName(){
		return $this->name;
	}
	
	public function getTmpName(){
		return $this->tmpname;
	}
	
	public function savefile(){
		
				
		if(empty($_FILES['file']['name'])){
			return;
		}else{
			$fileName = $_FILES['file']['name'];

			$tmpFileName = $_FILES['file']["tmp_name"];

			$name = basename($fileName);
			move_uploaded_file($tmpFileName, "$this->uploadDir/$name");
			
			//$this->name = $this->uploadDir.'/'.$fileName;
			$this->name = $fileName;
		}		
	}
	
}

?>