<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> Home Finder||Advertise Submit </title>
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		
    </head>
	
    <body>
		
	<!--navigation bar section-->
		<div class="Topbar_wrapper container-fluid">
            
		<div class="logo col-sm-1 ">
			    <a href="index.php"> <img src="img/Logo.jpg"></a>
			</div>
            <div class="header col-sm-4">
                <h3>Home Finder <br>
                    <span class="GIT">Get It First!</span></h3>
              
            </div>
            <div class="header1 col-sm-4">
                  <p><a href="#">POST YOUR ADS</a></p>
            </div>
            <div class="header3 col-sm-3">
                  <!--h3>Siggned In As<br> <span class="logger">ABCD</span>  </h3-->
                   
                <div class="log">
                        <!--a href="index.html">Log Out</a-->
                </div>
            </div>
		</div>
	
		<!--Slider Section-->
          
            <div class="slider">
                <img src="img/Slider1.jpg" alt="Img"  class="img-responsive">
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
		
		
		
		<form method="post" action="post.php">
		<tr>
                                  <td><p>Rent Amount:</p></td>
                                   <td>  <input type="text"  name="rent" id="range" class="Algn"></td>
                                  
                              </tr>
		 <tr>
                                  <td><p>City:</p></td>
                                   <td>   <Select class="Algn" name="city">
								   <option selected="" disabled="">Select City</option>
								    <?php
										 $con = new PDO('mysql:host=localhost;dbname=hf', 'root', '');
										$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

										$stmt = "select * from city";
										$pdostmt = $con->query($stmt);
										$info=$pdostmt->fetchAll(PDO::FETCH_NUM);
										foreach($info as $a){
											
											echo "<option value='".$a[1]."'>".$a[1]."</option>";
										}
										 
										 ?>
                                        
                                      </Select></td>
                              </tr>
							  <tr>
                           <td><p>Available:</p></td>
                           <td><input type="date" name="ad" class="Algn"></td>
                           </tr>
						    <tr>
                           <td><p>Phone:</p></td>
                           <td><input type="text" name="phone" class="Algn"></td>
                           </tr>
						   						   <tr>
                           <td><p>Email:</p></td>
                           <td><input type="email" name="email" class="Algn"></td>
                           </tr>
						   <tr>
                                  <td><p>Area:</p></td>
                                 <td>   <Select class="Algn" name="area">
                                       <option selected="" disabled="">Select Area</option>
										   <?php
										 $con = new PDO('mysql:host=localhost;dbname=hf', 'root', '');
										$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

										$stmt = "select * from area";
										$pdostmt = $con->query($stmt);
										$info=$pdostmt->fetchAll(PDO::FETCH_NUM);
										foreach($info as $a){
											
											echo "<option value='".$a[2]."'>".$a[2]."</option>";
										}
										 
										 ?>
                                      </Select></td>
                              </tr>
                               <tr>
                                    <td><p>Address:</p></td>
                                    <td><input type="text" name="address" placeholder="address line" class="Algn"></td>
                              </tr>
							   <tr>
                                    <td><p>Type:</p></td>
                                    <td><select name="type" class="Algn">
  <option value="Single Room">Single Room</option>
  <option value="Family Flat">Family Flat</option>
  <option value="Room Mate">Room Mate</option>
  <option value="Office Space">Office Space</option>
</select></td>
                              </tr>
							  
							   <tr>
                                    <td><p>Car Parking:</p></td>
                                    <td> <input type="radio" name="car" value="Yes"> Yes<br>
  <input type="radio" name="car" value="No"> No<br></td>
                              </tr>
							   <input type="submit" value="POST" name="submit" class="tab">
							  

		</form>
		
		
        <!--div class="main col-sm-9">
                  <div class="SYA"> <p ><u>Post Your Home Rent Advertisement</u></p>
                </div>
				<form method="post" action="post.php">
              <div class="range">
                     
                          <table>
                               <tr>
                                  <td><p>Rent Amount:</p></td>
                                   <td>  <input type="text"  name="rent" id="range" class="Algn"></td>
                                  
                              </tr>
                           
                          </table>
                      </form>
              </div>
            <div class="part1">
                  
                          <table>
                               <tr>
                                  <td><p>City:</p></td>
                                   <td>   <Select class="Algn" name="city">
								   <option selected="" disabled="">Select City</option>
								    <?php
										 $con = new PDO('mysql:host=localhost;dbname=hf', 'root', '');
										$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

										$stmt = "select * from city";
										$pdostmt = $con->query($stmt);
										$info=$pdostmt->fetchAll(PDO::FETCH_NUM);
										foreach($info as $a){
											
											echo "<option value='".$a[0]."'>".$a[1]."</option>";
										}
										 
										 ?>
                                        
                                      </Select></td>
                              </tr>
                             
                               <tr>
                           <td><p>Available:</p></td>
                           <td><input type="date" name="ad" class="Algn"></td>
                           </tr>
						   
						   <tr>
                           <td><p>Phone:</p></td>
                           <td><input type="text" name="phone" class="Algn"></td>
                           </tr>
						   
						   
						   <tr>
                           <td><p>Email:</p></td>
                           <td><input type="email" name="email" class="Algn"></td>
                           </tr>
                           
                          </table>

            </div>
            
            <div class="part2">
            
                          <table>
                               <tr>
                                  <td><p>Area:</p></td>
                                 <td>   <Select class="Algn" name="area">
                                       <option selected="" disabled="">Select Area</option>
										   <?php
										 $con = new PDO('mysql:host=localhost;dbname=hf', 'root', '');
										$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

										$stmt = "select * from area";
										$pdostmt = $con->query($stmt);
										$info=$pdostmt->fetchAll(PDO::FETCH_NUM);
										foreach($info as $a){
											
											echo "<option value='".$a[2]."'>".$a[2]."</option>";
										}
										 
										 ?>
                                      </Select></td>
                              </tr>
                               <tr>
                                    <td><p>Address:</p></td>
                                    <td><input type="text" name="address" placeholder="address line" class="Algn"></td>
                              </tr>
							  
							  
							   <tr>
                                    <td><p>Type:</p></td>
                                    <td><select name="type" class="Algn">
  <option value="Single Room">Single Room</option>
  <option value="Family Fla">Family Flat</option>
  <option value="Room Mate">Room Mate</option>
  <option value="Office Space">Office Space</option>
</select></td>
                              </tr>
							  
							   <tr>
                                    <td><p>Car Parking:</p></td>
                                    <td> <input type="radio" name="car" value="Yes"> Yes<br>
  <input type="radio" name="car" value="No"> No<br></td>
                              </tr>
							  
							  
							  
							  
                          </table>
						  <br/>
						
						  <br/>
						  <br/>
						  <br/>
						    <br/>
						  <br/>
						  <br/>
						   <br/>
						  <br/>
						  <br/>
						  <br/>
						   <input type="submit" value="POST" name="submit" class="tab">
                      
            </div>
			</form>
             
        </div-->
	
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
	
	
	<script>
<script>
$( "select[name='city']" ).change(function () {
    var stateID = $(this).val();


    if(stateID) {


        $.ajax({
            url: "ajaxpro.php",
            dataType: 'Json',
            data: {'id':stateID},
            success: function(data) {
                $('select[name="area"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="area"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });


    }else{
        $('select[name="area"]').empty();
    }
});
</script>


	
	
	
	
	
	
	
	
	
	
	
	
	
</html>
