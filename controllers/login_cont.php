<?php 
	#   Author of the script
	#   Name: Reuben Joshua
	#   Email: reubenjoshua585@gmail.com
    #   Date created: 20/05/2024
    #   Date modified: 20/05/2024 
	

	include_once('models/User.php');
	// Creating instance
	$user = new User();
	
	if (isset($_POST['log_in_btn']))
	{
		//Getting user inputs
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Validate user values
		if ( $email && $password )
		{
			$dt_01 = [ $email ];
			$user_dt = $user->getLogin( $dt_01 );
			if ( $user_dt )
			{
				$id = $user_dt['id'];
				$time_out = time() + 3600;
				$_SESSION['user_id'] = $id;
				setcookie('user_id', $id, $time_out );
				header("location: ./notes", true, 301);
			}
			else
			{
				$msg = 'User does not exit';

			}
		}
		else
		{
			$msg = 'Enter fields';
		}
	}


	//Login interface
	include_once( 'views/login.php' );
 ?>