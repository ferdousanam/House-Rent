<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    session_start();
     if (!isset($_SESSION['email'])) {
    echo "<script>window.location.assign('index.php')</script>";
	
}
   else{
?>



<html>
    <head>
        <title>Home Finder </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="apple-touch-icon" href="icon.png">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Cherry+Swash:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
		<script src="js/vendor/jquery-3.2.1.min.js"></script>
		<script src="js/vendor/modernizr-3.5.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/plugins.js"></script>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
    </head>
	
    <body>
		
	<!--navigation bar section-->
		<div class="Topbar_wrapper container-fluid">
            
		<div class="logo col-sm-1 ">
			  <a href="#"> <img src="img/Logo.jpg"></a>
			</div>
            <div class="header col-sm-4">
                <h3>Home Finder<br>
                    <span class="GIT">Get It First!</span></h3>
              
            </div>
            <div class="header1 col-sm-4">
                  <!--p><a href="#">SUBMIT YOUR ADS</a></p-->
            </div>
           
			
			
			 <div class="header2 col-sm-3" name="after" ">

                  <p><a href="cart.php"><span class="glyphicon glyphicon-user"> </span>User: <?php echo $_SESSION['email']?></a> <a href="logout.php">Log Out</a></p>
                   
            </div>
			
			
			
			
		</div>
		<?php
        $status = "";
        if (isset($_GET['status'])) {
            $status = $_GET['status'];
            if ($status == 'invalid') {
                ?>
                <script>window.alert('invalid username or password');</script>
                <?php
            }
            else if($status=='dberror'){
                ?>
                <script>window.alert('Database Connection Error');</script>
                <?php
            }
            else if($status=='logout'){
                ?>
                <script>window.alert('Successfully logged out.');</script>
                <?php
            }
        }
        ?>
	
		<!--Slider Section-->
          
            <div class="slider">
                <img src="img/Slider1.jpg" alt="Img"  class="img-responsive">
            </div>
          
		<!--main section-->
        
        <div class="sidber col-sm-3">
              <h2>MENU</h2>
            <ul>
                 <li><a href="index_1.php">Home</a></li>
                 <li><a href="sr.php">Single Room</a></li>
                 <li><a href="ff.php">Family Flat</a></li>
                 <li><a href="rm.php">Room-Mate</a></li>
                 <li><a href="os.php">Office-Space</a></li>
            </ul>
        </div>
        <div class="main col-sm-9">
              <div class="SFM">
                    <h2>SEARCH.FIND.MOVEIN<br>
                        <span class="FAP">Find A Place To Live</span></h2>
            </div>
            <div class="Htb">
            <div class="search">
                    <img src="img/icons8-search-32.png" class="img-responsive">
               
                  <input type="text"  class="lab" name="search" placeholder="City,Area">
                 
            </div>
         </div>
        </div>
	
        <!--footer -->
        <div class="footer col-sm-12 ">
            <div class="col-sm-2">
            </div>
         <div class="sec-1 col-sm-8">
                   <h2>Terms Policy Help Contact <br>
                    <span class="CCC">CopyRight &copy; <a href="#">HomeFinder</a></span></h2>
            </div>
        <div class="sec-2 col-sm-2">
               <p>Social Links</p>
            <div class="Social">
               <ul>
                   <li><a href="#"><img src="img/facebook.png" class="img-circle img-responsive"> </a></li>
                   <li><a href="#"><img src="img/twitter.png" class="img-circle img-responsive"> </a></li>
                   <li><a href="#"><img src="img/linkin.png" class="img-circle img-responsive"> </a></li>
                   <li><a href="#"><img src="img/googleplus.png" class="img-circle img-responsive"> </a></li>
              </ul>
            </div>
         </div>
        
        </div>
            
	

		
    </body>
</html>

<?php

   }
   
   ?>
