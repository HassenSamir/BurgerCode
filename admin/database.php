<?php

	class Database
	{


		private static $dbHost="mysql-shbdd.alwaysdata.net";
		private static $dbName = "shbdd_burgercode";
		private static $dbUser = "shbdd";
		private static $dbUserPassword = "BurgerCode";

		private static $connection = null;
		

		public static function connect()
		{
			try
			{
				self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbUserPassword);
			}

			catch(PDOException $e)
			{
				die($e->getMessage());
			}
			return self::$connection;
		}
		
		public static function disconnect()
		{
			self::$connection = null;
			
		}		
		
	}
	Database::connect();

	
?>