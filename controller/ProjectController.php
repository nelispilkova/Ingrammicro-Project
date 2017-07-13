<?php

function __autoload($className) {
	require_once "../model/" . $className . '.php';	
}

session_start();

// if (isset($_SESSION['user'])) {
	
// 	$user = json_decode($_SESSION['user']);
	
	

// 	if(isset($_POST['submit'])){

// 		try {
		
						
						
			
// 		} catch (Exception $e) {
// 				$errorMessage = $e->getMessage();
// 	}
// 		 header('Location:/CarDetailsController.php?id='.$postId);
// }


	$campId=1;
	$bussin=2;
	$dir=3;

	$projDao = new ProjectDAO();
	$activities = $projDao->getActivities();
	
	$campaignManagers = $projDao->getManagers($campId);
	$businessManagers = $projDao->getManagers($bussin);
	$directors =  $projDao->getManagers($dir);
	
	
	include '../view/index.php';
	
	
	
	
// } else{
// 	 header('Location:/homeController.php', true, 302);
//}

