<?php
	#   Author of the script
	#   Name: Ayuba Adamu
	#   Email: adamujob71@gmail.com
	#   Date created: 03/11/2022
	#   Date modified: 18/09/2022

	include_once( 'App.php' );
	include_once( 'App.php' );
 
	class User
	{
		// Using Namespaces
		use App {
			App::__construct as private __appConst;
		}

		use App;

		protected $table = '';
		const DB_TABLE = 'users';

		function __construct()
	 	{
	 		$this->__appConst();
	 		$this->table = self::DB_TABLE;
	 	}


		function getLoggedUser()
		{
			return $_COOKIE[ 'user_id' ] ?? 0;
		}

		function addNew ( array $dt) 
		{
			$sql = "INSERT INTO $this->table  ( first_name, last_name, email, password) VALUES ( ?, ?, ?, ? )";
			$res = $this->runQuery_2( $sql, $dt);
			return $res ?? 0;
		}

		//getLogin

		function getLogin( array $dt)
		{
			$sql = "SELECT * FROM $this->table WHERE email = ?";
			$res = $this->fetchData( $sql, $dt );

			return $res ?? [];
		}
		function getById( array $dt)
		{
			$sql = "SELECT * FROM $this->table WHERE id = ?";
			$res = $this->fetchData( $sql, $dt );

			return $res ?? [];
		}

		function updateById( array $dt)
		{
			$sql = "UPDATE $this->table  SET first_name = ?, last_name = ?, password = ? WHERE id = ? ";
			$res = $this->runQuery_2( $sql, $dt);
			return $res ?? 0;
		}
		
	}
		
?>