<?php
	#   Author of the script
	#   Name: Ayuba Adamu
	#   Email: adamujob71@gmail.com
	#   Date created: 03/11/2022
	#   Date modified: 18/09/2022

	include_once( 'App.php' );
 
	class Note
	{
		// Using Namespaces
		use App {
			App::__construct as private __appConst;
		}

		use App;

		protected $table = '';
		const DB_TABLE = 'notes';

		function __construct()
	 	{
	 		$this->__appConst();
	 		$this->table = self::DB_TABLE;
	 	}

        function addNew ( array $dt)
        {
            $sql = "INSERT INTO notes ( description ) VALUES (?)";
			$res = $this->runQuery_2( $sql, $dt);
			return $res ?? 0;
        }

        function getAll ( array $dt)
        {
            $sql = "SELECT * FROM  $this->table";
			$res = $this->fetchAllData( $sql, $dt);
			return $res ?? 0;
        }


       
	}

?>