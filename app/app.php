<?php 
	
	 		namespace APP\DB;

  			require 'app/config/database.php';
  			require  'app/db.php';
			
  			$db = new DB ($config);
  			$conn = $db->connect();
  			if(!$conn ) die("error in db");




 ?>