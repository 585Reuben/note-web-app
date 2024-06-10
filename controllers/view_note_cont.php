<?php 
	#  Author of the script
	#   Name: Reuben Joshua
	#   Email: reubenjoshua585@gmail.com
    #   Date created: 20/05/2024
    #   Date modified: 20/05/2024 

   include_once('models/Note.php');
   include_once('controllers/user_auth.php');

   $note = new Note ();

   $id = isset($_GET['id']) ? $_GET['id'] : 0;
   $user_dt = $note->getById([$id]);
   $description = $user_dt['description'];
   $created_at = $user_dt['created_at'];
   

   
   include_once( 'views/view_note.php' );
	?>