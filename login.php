<?php include 'inc/header.php'; ?>
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
    <h2>User Log In<br>
      <span class="FAP"></span></h2>
      <hr/>
    </div>
    <div class="Htb">
      <form method="post" action="validate.php" >
       Email : <input type="email" name="email" id="email" style="padding-right:100px;">
       <br/>
       <br/>

       Password: <input type="text" name="pass" id="pass" style="padding-right:100px;">
       <br/>
       <br/>
       <input type="submit" value="Log In">
     </form>
   </div>
 </div>

<?php include 'inc/footer.php'; ?>