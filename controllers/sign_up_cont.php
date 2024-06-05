<?php 
	#  Author of the script
	#   Name: Reuben Joshua
	#   Email: reubenjoshua585@gmail.com
    #   Date created: 20/05/2024
    #   Date modified: 20/05/2024 

   include_once('models/User.php');
	// Creating instance
	$user = new User();
	
	if (isset($_POST['sign_up_btn']))
	{
		//Getting user inputs
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		// Validate user values
		if ( $first_name && $last_name && $email && $password )
		{
			//hash password
			$hash = password_hash( $password, PASSWORD_BCRYPT);
			$dt_01 = [ $first_name, $last_name, $email, $password];
			$add_user =  $user->addNew( $dt_01);

			if ( $add_user )
			{
				$msg = "User Added Successfully.";
			}
			else{
				$msg = "User Not Added.";
			}

		}
		else
		{
			$msg = 'Enter fields';
		}
	}


	//Sign up interface
	include_once( 'views/sign_up.php' );

 ?>