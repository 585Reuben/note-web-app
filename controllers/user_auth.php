<?php 
	#  Author of the script
	#   Name: Reuben Joshua
	#   Email: reubenjoshua585@gmail.com
    #   Date created: 20/05/2024
    #   Date modified: 20/05/2024 


	include_once('models/User.php');

	// Creating User Instance
	$user = new User();
	$user_id = $user->getLoggedUser();

	// When Not Login
	
	if (!$user_id){
		header("location:  ./login", true, 301);
	}
 ?>