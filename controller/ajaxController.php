<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}

// session_start ();
// if (isset ( $_SESSION ['user'] )) {

	if (isset ( $_GET ['activity'] )) {
		
		$projDao = new ProjectDAO ();
		
		$types = $projDao->getTypes((int)$_GET ['activity']);
		
		echo json_encode ($types);
	}
	
	
	if (isset ( $_GET ['type'] )) {
	
		$projDao = new ProjectDAO ();
	
		$margin = $projDao->getMargin((int)$_GET ['type']);
	
		echo json_encode ($margin);
	}
	
	
	
	
// 	if(isset($_GET['deleteid'])){
// 		$user=json_decode($_SESSION['user']);
// 		$postDao=new PostDAO();
// 		$result = $postDao->deletePost($_GET['deleteid'],$user->id);
// 		echo (int)$result;
// 	}
//}
   ?>