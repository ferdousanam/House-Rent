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
   $r=$_POST['r'];
   $id=$_POST['id'];   
   echo "<h1 style='text-align:center;'>Virtual Payment Gateway</h1>";
   echo "<hr/>";
	
	
	
     try{
	    $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt="SELECT * from advertise where adv_id='$adv';";
						 
						 
			            $pdostmt= $conn->query($stmt);
						 $table=$pdostmt->fetchAll(PDO::FETCH_NUM);
						 foreach($table as $row){
							  echo "<td>Advertise Reference Id:   .$row[0].</td>";
							 echo "<br/>";
							 echo "<td>Bkash Number:   .$row[2].</td>";
							 echo "<br/>";
							 echo "<td>Rent Amount :   .$row[9].</td>";
						 }
		
   }
   catch (PDOException $ex) {
                                echo "<script>showalert('Error !!!!!');</script>";
                            }
   
}

echo "<hr/>";





   echo "<form method=post action=sure.php>";
    echo "<input type=hidden name=id value='$id'>";//adv id
 
   echo "<input type=hidden name=ad value='$adv'>";//adv id

   echo "<br/>";
   
	echo "<br/>";
   echo "Enter Advanced Amount: <input type=text name=t id=t>";
     echo "<br/>";
   echo "Enter Trnasaction Number: <input type=text name=trx id=trx>";
   echo "<input type=submit value=Pay Now>";
   echo "</form>";
  

   
?>