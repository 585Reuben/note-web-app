<?php 
	#  Author of the script
	#   Name: Reuben Joshua
	#   Email: reubenjoshua585@gmail.com
    #   Date created: 20/05/2024
    #   Date modified: 20/05/2024 

   include_once('models/User.php');
   include_once('controllers/user_auth.php');
	// Creating instance
	$user = new User();
	
	if (isset($_POST['update_btn']))
	{
		//Getting user inputs
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$password = $_POST['password'];
		
		// Validate user values
		if ( $first_name && $last_name && $password )
		{
			//hash password
			$hash = password_hash( $password, PASSWORD_BCRYPT);
			$dt_01 = [ $first_name, $last_name, $password, $user_id];
			$update_user =  $user->updateById( $dt_01);

			if ( $update_user )
			{
				$msg = "Update Successfully.";
			}
			else{
				$msg = "Update Failed.";
			}

		}
		else
		{
			$msg = 'Enter fields';
		}
	}

    $user_dt = $user->getById( [$user_id]);
    $first_name = $user_dt['first_name'];
    $last_name = $user_dt['last_name'];
    $email = $user_dt['email'];


	//Sign up interface
	include_once( 'views/profile.php' );

 ?>