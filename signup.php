<?php include_once 'classes/Login.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Home Finder||Sign Up</title>
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
        <p><a href="#">SUBMIT YOUR ADS</a></p>
    </div>


    <div class="header2 col-sm-3" name="after"
    ">
    <p><a href="login.php">Log In</a> <a href="signup.php">Sign Up</a></p>

</div>


</div>

<!--Slider Section-->

<div class="slider">
    <img src="img/Slider1.jpg" alt="Img" class="img-responsive">
</div>

<!--main section-->

<div class="sidber col-sm-3">
    <h2>MENU</h2>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="SingleRoom.html">Single Room</a></li>
        <li><a href="FamilyFlat.html">Family Flat</a></li>
        <li><a href="RoomMate.html">Room-Mate</a></li>
        <li><a href="OfficeSpace.html">Office-Space</a></li>
    </ul>
</div>
<div class="main col-sm-9">
    <div class="SFM">
        <h2>User Sign Up<br>
            <span class="FAP"></span>
        </h2>
        <hr/>
    </div>
    <?php
    $user = new Login();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $check = $user->checkDuplicate($email);

        if ($check) {
            echo "Email Already Exist.! Please Sign Up with a different Email";
        } else {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hf";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = "insert into user_signup values(' ','$email','$name','$pass','$phone');";
                $conn->exec($stmt);
                echo "<script>window.alert('You Have Been Registered Successfully');</script>";
                echo "<script>window.location.assign('index.php');</script>";

            } catch (PDOException $ex) {
                echo "<script>showalert('sign up error');</script>";
            }
        }
    }
    ?>
    <div class="Htb">
        <form method="post" action="">
            User Email : <input type="email" name="email" id="email" style="padding-right:100px;">
            <br/>
            <br/>
            User Name : <input type="text" name="name" id="email" style="padding-right:100px;">
            <br/>
            <br/>

            Password: <input type="text" name="pass" id="pass" style="padding-right:100px;">
            <br/>
            <br/>


            Mobile <input type="text" name="phone" id="pass" style="padding-right:100px;">
            <br/>
            <br/>

            <input type="submit" value="Sign Up">
        </form>
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
