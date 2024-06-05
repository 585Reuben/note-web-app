<?php
    #   Author of the script
	#   Name: Reuben Joshua
	#   Email: reubenjoshua585@gmail.com
    #   Date created: 20/05/2024
    #   Date modified: 20/05/2024

	include_once( 'App.php' );

	class WebApp
	{
		// using App class
		// use App;

		function fixUrl( $page ) 
		{
			return str_replace( '-', '_', $page );
		}

		function showAlert( $msg )
		{
			if ( isset( $_SESSION['msg'] ) ) 
			{
				$msg = $_SESSION['msg'];
				unset( $_SESSION['msg'] );
			}
			
			return $msg;
		}

		function showAlertMsg( $type, $msg )
		{
			$type = "alert-$type";
			$alert = "<div class='alert $type alert-dismissible fade show' role='alert'>$msg <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
		      </div>";

		   return $alert;
		}

		// persist user input
		function persistData( $data ) 
		{
			$dt = '';

			if ( isset( $_POST[ $data ] ) ) 
			{
				$dt = $_POST[ $data ];
			} 

			return $dt;
		}

		function persistData2( $data ) 
		{
			$dt = '';
			
			if ( isset( $_POST[ $data ] ) ) 
			{
				$dt = $_POST[ $data ];
			}
			else 
			{
				$dt = $data;
			}

			return $dt;
		} 



	}

?>