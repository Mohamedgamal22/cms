<?php 

		namespace APP\DB;
		use \PDO;
		/**
		* 
		*/
		//error_reporting(E_ALL);
		//ini_set('display_errors',1); 
		
		class DB
		{ 

			private $username;
			private $password;
			private $database;
			private $host;
			
			public function __construct($config)
			{
				$this->username = $config["username"];
				$this->password = $config["password"];
				$this->host = $config["host"];
				$this->database = $config["database"];
							

			}

			public function connect()
			{
				// var_dump($this->host);
				try {
						$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->database,$this->username,$this->password);
			
						$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
						// var_dump($conn);die;
							 return $conn;
					} catch (Exception $e) {
						return false; 
  					}
			}

		
		public function query($sql,$bind,$conn)
		{
			$stmt = $conn->prepare($sql);
			$stmt->execute($bind);

			$result = $stmt->fetchAll();
			return $result ? $result : false;
		}	
	}




 ?>