<?php 
	#  Author of the script
	#   Name: Reuben Joshua
	#   Email: reubenjoshua585@gmail.com
    #   Date created: 20/05/2024
    #   Date modified: 20/05/2024 

   include_once('models/Note.php');
   include_once('controllers/user_auth.php');
	// Creating instance
	$note = new  Note();
	
	if (isset($_POST['notes_btn']))
	{
		//Getting user inputs
		$description = $_POST['description'];
		
		// Validate user values
		if (  $description )
		{
	
			$add_note =  $note->addNew( [ $description] );

			if ( $add_note )
			{
				$msg = $web_app->showAlertMsg("success", "Note Added Successfully.");
			}
			else
			{
				$msg = "Note Not Added";
			}

		}
		else
		{
			$msg = 'Enter fields';
		}
	}
	$note_arr = $note->getAll([]);


	//Note interface
	include_once( 'views/notes.php' );

 ?>