<?php 
	require "app/app.php";
  
 $author = $db->query("SELECT * FROM author",[],$conn);
  var_dump($author); die;


 ?>