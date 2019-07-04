<?php

	require 'DbConnect.php';
	
	function loadCity(){
		$db = new DbConnect; // Creating New Object
		$conn = $db->connect();
		$stmt=$conn->prepare("Select * from city;");
		$stmt->execute();
		$city=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $city;
		
	}


?>