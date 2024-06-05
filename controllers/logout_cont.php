<?php 
	#  Author of the script
	#   Name: Reuben Joshua
	#   Email: reubenjoshua585@gmail.com
    #   Date created: 20/05/2024
    #   Date modified: 20/05/2024 

            $_SESSION = [];
            $_COOKIE = [];

            session_destroy();
            $time_out = time() - 3600;
            setcookie('user_id', $time_out );
            header("location: ./login", true, 301);
    
 ?>