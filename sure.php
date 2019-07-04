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
	$id=$_POST['id'];
	$ad=$_POST['ad'];
	$t=$_POST['t'];
	$trx=$_POST['trx'];
   
   
 
   

   try{
	    $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt="insert into payment values('','$id','$ad','$t','$trx');";
		
		
		  $stmt_1="update advertise set avail='No' where adv_id='$ad'; ";
		
		$conn->exec($stmt);
		$conn->exec($stmt_1);
		echo "<script>window.alert('Payment Successful');</script>";
		echo "<script>window.location.assign('index_1.php');</script>";
   }
   catch (PDOException $ex) {
                                echo "<script>showalert('Sign Up Error');</script>";
                            }
   
}
?>