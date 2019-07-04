<?php

   $servername = "localhost";
    $username = "root";
    $password = "";                    
    $dbname = "hf";
    
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $name=$_POST['name'];
   $pass=$_POST['pass'];
   
	
	try{
			 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  $stmt = "insert into user_signup values(' ','$email','$name','$pass','$phone');";
			 $conn->exec($stmt);
			 echo "<script>window.alert('You Have Been Registered Successfully');</script>";
			 echo "<script>window.location.assign('index.php');</script>";
		
	}catch(PDOException $ex){
		
		echo "<script>showalert('sign up error');</script>";
		
	}



?>