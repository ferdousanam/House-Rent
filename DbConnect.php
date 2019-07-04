<?php


class DbConnect{

	$dbName = 'hf';

	public function connect(){
		try{
			$conn = new PDO('mysql:host=localhost;dbname=$dbName', 'root', '');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		}catch(PDOException $ex){
			echo 'Database Error: '.$ex->getMessage();
		}
	}
}

?>