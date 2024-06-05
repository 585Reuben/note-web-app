<?php 
   #   Author of the script
	#   Name: Ayuba Adamu
	#   Email: adamujob71@gmail.com
   #   Date created: 29/06/2022
   #   Date modified: 12/05/2024
   ob_start();
   
   if( session_status() == PHP_SESSION_NONE )
   {
      session_start();    
   }       
   
   //App functions
   include_once( 'config.php' );
   include_once( 'models/WebApp.php' );
   

   //Creating App instances
   $web_app = new WebApp();
   //$sess = new Session();
  // $portal_sess = new PortalSession();

   //$curr_sess = $portal_sess->getByCurrentSession( [ 'Student', 1 ] );
   //$session_portal = $sess_id = $curr_sess[ 'session_id' ];
   //$session_top = $_SESSION[ 'session_top' ] ?? $sess_id;

   //page name logic
   $uri_arr = explode( '/', $uri );
   $uri_len =  count( $uri_arr );
   $page_starts = $uri_len - 1;
   $page = $uri_arr[ $page_starts ];

   $page_arr = explode( '?', $uri_arr[ $page_starts ] );
   $page = $page_arr[0];
   $page = $web_app->fixUrl( $page );

   //$server_name_1 = $server_name . '?tab=';

   //disable header
   $header_blacklist_arr = [ 'login' ];

   //get url path
   /*$tab = isset( $_GET['tab'] ) ? $_GET['tab']  : '';
   $tab = $web_app->fixUrl();*/

   //setting login as default
   if ( !$page ) 
   {
      $page = $page_title = 'login';
   }

   $page_title_arr = [ 'about_us' => 'About Us'];
   $page_title = $page_title_arr[ $page ] ?? $page;
   $page_title = $page_title ? ' - ' . ucwords( $page_title ) : '';
   
   include_once( 'views/header.php' );

   $page_x = $page . '_cont.php';
   $file = "$cur_dir/controllers/$page_x";

   //checking and including file
   if ( is_file( $file ) ) 
   {
      include_once( $file );
   }
   else
   {
      header( "Location: $server_name", true, 301 );
      exit();
   }

   include_once( 'views/footer.php' ); 
   ob_end_flush();
?>