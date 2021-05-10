<?php 

spl_autoload_register(function($class){
	require_once('system/libs/'.$class.'.php');
});

require_once('config/config.php');

$url = isset($_GET['url']) ? $_GET['url'] : NULL;
if($url != null){
	$url = rtrim($url, '/');
	$url = explode('/', filter_var($url, FILTER_SANITIZE_URL));
	if(isset($url[0])){
		require_once('app/controllers/'.$url[0].'.php');
		$ctlr = new $url[0]();
		if(isset($url[2])){
			$method = $url[1];
			$ctlr->$method($url[2]);
		}else{
			if(isset($url[1])){
				$method = $url[1];
				$ctlr->$method();
			}
		}
	}
}else{
	unset($url);
	require_once('app/controllers/Controller.php');
	$ctlr = new Controller();
	$ctlr->home();
}




?>