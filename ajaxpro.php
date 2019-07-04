<?php
										 $con = new PDO('mysql:host=localhost;dbname=hf', 'root', '');
										$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

										$stmt = "SELECT * FROM area
         WHERE id LIKE '%".$_GET['id']."%'";
										$pdostmt = $con->query($stmt);
										$json = [];
   while($row = $pdostmt->fetch_assoc()){
        $json[$row['id']] = $row['area'];
   }


   echo json_encode($json);
										 
										 ?>