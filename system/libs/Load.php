<?php
/**
* Load Class
*/
class Load{

	public function __construct(){
		# code...
	}
	
	public function view($page, $data = false){
		if($data == true){
			extract($data);
		}
		$dir = explode('.', $page);
		$dir_path = implode($dir, '/');
		include_once('app/views/'.$dir_path.'.php');
	}

	public function model($filename){
		$dir = explode('.', $filename);
		$dir_path = implode($dir, '/');
		include_once('app/models/'.$dir_path.'.php');
		return new $filename();
	}
	
}