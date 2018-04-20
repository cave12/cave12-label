<?php  
	// redirect to index
	// using $_SERVER ? 
	
	// header("Location: http://label-cave12:8888/");
	// header('Location: /');
	header("Location: http://".$_SERVER['HTTP_HOST']."/");
	exit;
	
?>