<?php

   $servername = "localhost";
    $username = "root";
    $password = "";                    
    $dbname = "hf";
    
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $ad=$_POST['ad'];
   $city=$_POST['city'];
   $area=$_POST['area'];
   $address=$_POST['address'];
   $type=$_POST['type'];
   $car=$_POST['car'];
   $rent=$_POST['rent'];
	
	try{
			 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  $stmt = "insert into advertise values(' ','$email','$phone','$ad','$city','$area','$address','$type','$car','$rent','Yes');";
			 $conn->exec($stmt);
			 echo "<script>window.alert('Your Add Has Been Posted Successfully');</script>";
			 echo "<script>window.location.assign('add.php');</script>";
		
	}catch(PDOException $ex){
		
		echo "<script>showalert('sign up error');</script>";
		
	}



?>