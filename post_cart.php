<?php

session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>window.location.assign('index.php')</script>";
	
}
else{
    $serveraddr = "localhost";
    $username = "root";
    $password="";                
    $dbname = "hf";
   
   
  
	
	
	
	
   
   $adv=$_POST['adv'];
   $id=$_POST['id'];
   $rent=$_POST['rent'];
  
   
   
   

   try{
	    $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt="insert into cart values('','$id','$adv','$rent');";
		
		
		
		$conn->exec($stmt);
		echo "<script>window.alert('Your House Rent Is Added To Cart');</script>";
		echo "<script>window.location.assign('index_1.php');</script>";
   }
   catch (PDOException $ex) {
                                echo "<script>showalert('Sign Up Error');</script>";
                            }
   
}
?>