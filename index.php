<?php include 'inc/header.php'; ?>
<?php
include 'lib/Database.php';
$db = new Database();
?>
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
<!--main section-->
<div class="sidber col-sm-3">
  <h2>MENU</h2>
  <ul>
    <li><a href="index.php">Home</a></li>
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
  <div class="Htb">
    <?php
    $query = "SELECT * FROM advertise WHERE avail = 'yes' ORDER BY adv_id DESC LIMIT 4";
    $result = $db->select($query);
    ?>
  </div>
  <div class="row">
    <?php while ($value = $result->fetch_assoc()) { ?>
    <div class="col-md-12 col-sm-12">
      <div class='profile'>
        <div class='Propic'>
          <img src='img/vector_building_house_logo_inspiration.png' class='img-responsive'>
        </div>
        <div class='Prodetalis'>
          <table>
            <tr>
              <td><p> Available Date:</p></td>
              <td> <p><?=$value['avail_date']?></p></td>
            </tr>
            
            <tr>
              <td><p> City:</p></td>
              <td> <p><?=$value['city']?></p></td>
            </tr>
            <tr>
              <td><p>Area:</p></td>
              <td><p><?=$value['area']?></p></td>
            </tr>
            <tr>
              <td><p>Address:</p></td>
              <td><p><?=$value['address']?></p></td>
            </tr>
            <tr>
              <td><p>Rent:</p></td>
              <td><p><?=$value['rent']?>.. Tk.</p></td>
            </tr>
            <tr>
              <td><p>Parking:</p></td>
              <td><p><?=$value['car_parking']?></p></td>
            </tr>
            <tr>
              <td><p>Phone:</p></td>
              <td><p><?=$value['adv_giver_phone']?></p></td>
            </tr>
            <tr>
              <td>
                <form method=post action=post_cart.php>
                  <input type=hidden name=adv value='<?=$value['adv_id']?>'>
                  <input type=hidden name=id value='<?=$a?>'>
                  <input type=hidden name=rent value='<?=$value['rent']?>'>
                  <input type=submit value=Confirm class=con>
                </form>
              </td>
            </tr>
            <tr>
              <td><button class=con>See In G Map</button></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
<?php include 'inc/footer.php'; ?>