<?php 
	#   Author of the script
	#   Name: Ayuba Adamu
	#   Email: adamujob71@gmail.com
	#   Date created: 28/05/2023 
	#   Date modified: 06/07/2023

	const ENVIRONMENT = 'Test';//Test Live

	//DB Config
	const HOST = 'localhost';
	const USER = 'root';
	const PWORD = '';
	const DB = 'note';

	$website_title = 'Note';
	$apply_url = 'http://ccohtech.test';

	const APP_SESS = 'stud_id';
	const APP_SESS_TIME = 3500;
	
	//url
   $server_name = ENVIRONMENT == 'Test' ? 'http://' : 'https://';
   $server_name .= $_SERVER['SERVER_NAME'];
   $uri = $_SERVER['REQUEST_URI'];
   $app_url = ( strlen( $uri ) > 1 ) ? "$server_name$uri" : "$server_name";

   //directory
   $root_dir = dirname( __DIR__ );
   $cur_dir = dirname( __FILE__ );
	//echo getcwd();

	$upload_dir = ENVIRONMENT == 'Test' ? "$cur_dir/uploads" : '/home/challeng/public_html/uploads/applicants';
	//$upload_url = "$server_name/uploads";
	$upload_url = "$apply_url/uploads/applicants";

	$test_email = 'ezra00100@gmail.com';
	$msg = '';
	$clear = false;
	$is_admin = false;

	$js_modules = [];
?> 