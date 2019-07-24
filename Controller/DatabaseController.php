<?php
	/**
	 * 
	 */
	class DatabaseController 
	{
		function connect()
		{
			$username = "ravi";
			$password = "ravindra";
			$pdo_conn = new PDO('mysql:host=localhost;dbname=newsportal',$username, $password);
			// echo "Database Connected";
			return $pdo_conn;
		}
	}
	$obj = new DatabaseController();
	$obj->connect();
?>