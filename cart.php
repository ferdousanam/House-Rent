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
    <title>Home Finder||User Cart</title>
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
      <h2>User Info</h2>
      <hr/>
      <ul>
        
        <?php
        $a=$_SESSION['id'];
        $b=implode($a);
        date_default_timezone_set("Asia/Dhaka");
        try {
        $con=new PDO("mysql:host=localhost;dbname=hf","root","");
        $stmt="select *from user_signup where user_id='$b';";
        $pdostmt=$con->query($stmt);
        $table=$pdostmt->fetchAll(PDO::FETCH_NUM);
        
        foreach($table as $row){
        
          echo "<li>".'<b>User Name: </b>'.$row[2]."</li>";
              echo "<li>".'<b>User Email: </b>'.$row[1]."</li>";
                echo "<li>".'<b>User Phone: </b>'.$row[4]."</li>";
                              
              
        
              
        }
              echo "<li>".'<b>Date: </b>'.date("Y-m-d")."</li>";
        echo "<li>".'<b>Time: </b>'.date("h:i:sa")."</li>";
        } catch (Exception $ex) {
        echo "<script>Database Problem</script>";
        }
        
        
        ?>
        
        
        
        
      </ul>
    </div>
    <div class="main col-sm-9" style="overflow:auto;">
      <div class="SYA">
        <p>
          <u>User Cart</u>
        </p>
      </div>
      <?php
          try{
        $conn = new PDO("mysql:host=localhost;dbname=hf", "root", "");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $in=$_SESSION['id'];
        $a=implode($in);
          
          
                  $stmt="SELECT * from cart where user_id='$a'";
                  
                  
            $pdostmt= $conn->query($stmt);
                  $table=$pdostmt->fetchAll(PDO::FETCH_NUM);
                  foreach($table as $row){
                    
                echo " <div class='profile'>";
                  
        echo "<div class='Propic'>";
          echo      "<img src='img/vector_building_house_logo_inspiration.png' class='img-responsive'>";
        echo "</div>";
        echo "<div class='Prodetalis'>";
          echo    "<table>";
                      
            echo        "<tr>";
              echo             "<td><p>Advertise Reference Id:</p></td>";
              echo            "<td><p>".$row[2]."</p></td>";
            echo       "</tr>";
            echo        "<tr>";
                        echo        "<tr>";
                echo             "<td><p>Rent:</p></td>";
                echo            "<td><p>".$row[3]."</p></td>";
              echo       "</tr>";
              
              echo "<tr><td><form method=post action=pay.php>";
                          echo "<input type=hidden name=adv value='$row[2]'>";//adv id
                          echo "<input type=hidden name=r value='$row[3]'>";//adv id
                          echo "<input type=hidden name=id value='$a'>";//user_id
                          echo "<input type=submit value=Pay Now class=con>";
                      echo "</form></td></tr>";
                          
                      
                          
                          
                          
            echo   "</table>";
            
          echo "</div>";
        echo"</div>";
                      
                    }
                    
            if($pdostmt->rowCount()==0){
        echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
        
        }
        }
        catch (PDOException $ex) {
        echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
        }
            
            
            
        ?>
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