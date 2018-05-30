<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grocery2go";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Grocery2Go</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">


</head>
<body>

  <!-- body -->
  <div class="well container">
    <div class="row-fluid">
      <!--shipping details-->
      <div class="span6">
        <h2>Checkout</h2>
      </div>
    </div>
      <div class="row-fluid">
      <div class="span5">
        <form action="update-customer-details.php" method="post">
          <fieldset>
            <legend>Shipping details</legend>
            <div class="controls controls-row">
              <input class="span6" type="text" name="firstname" placeholder="<?php echo $_SESSION["firstname"]; ?>">
              <input class="span6" type="text"  name="lastname" placeholder="<?php echo $_SESSION["lastname"]; ?>">
            </div>
            <div class="controls">
              <input class="span12"type="text"  name="address"placeholder="<?php echo $_SESSION["address"]; ?>">
            </div>
            <div class="controls controls-row">
              <input class="span6" type="text"  name="mobilenum"placeholder="<?php echo $_SESSION["phoneNumb"]; ?>">
            </div>
            <textarea rows="3" name="Landmark" placeholder="Landmark and delivery instructions" name="instructions"></textarea>
          </fieldset>

<?php if (  $_SESSION["total_qty"]!=0){
  ?><h3><?php echo rand(); ?></h3>
<?php } ?>


          <fieldset>
            <legend>Delivery schedule</legend>
          </fieldset>
          <div class="row-fluid">
            <div class="span1">Time:</div>
            <div class="span1 offset5">Day:</div>
          </div>
          <select class="span6">
            <option value="now" selected>Now</option>
            <option value="9:00-10:00am">9:00-10:00am</option>
            <option value="10:00-11:00am">10:00-11:00am</option>
            <option value="11:00-12:00pm">11:00am-12:00pm</option>
            <option value="12:00-1:00pm">12:00-1:00pm</option>
            <option value="1:00-2:00pm:">1:00-2:00pm</option>
            <option value="3:00-4:00pm">3:00-4:00pm</option>
            <option value="5:00-6:00pm">5:00-6:00pm</option>
              <option value="6:00-7:00pm">6:00-7:00pm</option>
              <option value="8:00-9:00pm">8:00-9:00pm</option>

          </select>
          <select class="span6">
            <option value="2 June">Today, 2 June</option>
            <option value="3 June">3 June</option>
            <option value="4 June">4 June</option>
            <option value="5 June">5 June</option>
            <option value="6 June">6 June</option>
            <option value="7 June">7 June</option>
          </select>

          <legend>Payment</legend>
            <label class="radio">
              <input type="radio" name="cashondelviery" id="option" value="option1" checked>
              Cash on Delivery <?php if (  $_SESSION["total_qty"]!=0){
                ?><p><font color='red'><h3>Tracking No.</h3> <h2><?php echo rand(); ?></h2> </font></p>
              <?php } ?>

            </label>
      </div>
      <!--checkout summary division-->
<?php
$sqlGetProduct = "SELECT b.name AS 'Product Name',a.quantity AS 'Quantity', b.price AS 'Price'
 FROM tbl_cart a INNER JOIN tbl_product b where a.product_id=b.id AND a.member_id=".$_SESSION["cid"];
//SELECT b.name AS 'Product Name',a.quantity AS 'Quantity', b.price AS 'Price' FROM tbl_cart a INNER JOIN tbl_product b where a.product_id=b.id AND a.member_id=59
//echo $sqlGetProduct;
$resulta = $conn->query($sqlGetProduct);
 ?>

      <!-- this get the cartSummary-->
      <div class="span5 offset1">

    <h3>Cart Summary</h3>
        <div class="row-fluid">
          <table class="table ">
<!-- header -->
<tr>
  <th>Item(s)</th>
  <td style="text-align:center"><b>Quantity</b></td>
  <td style="text-align:right;"> <b>Price</b>  </td>
</tr>
<?php if ($resulta->num_rows > 0) {
  while($row = $resulta->fetch_assoc()) {
  ?>
            <tr>
              <th><?php echo $row["Product Name"]; ?></th>
              <td style="text-align:center"><?php  echo $row["Quantity"]; ?></td>
              <td style="text-align:right;"><?php  echo "Php".$row["Price"] ?></td>
            </tr>
<?php
     }
} else {
echo "Empty Cart";
}

  if (  $_SESSION["total_qty"]==0) {
    $_SESSION["total_qty"]=0;
    $_SESSION["subTotalPrice"]=0;
    $_SESSION["concierge"]=0;
    $_SESSION["deliveryfee"]=0;

  }

 ?>

            <!-- this is to compute total-->
          </table>
          <table class="table table-stripped">
            <tr>
              <td><small><font color="red">Sub-total</font></small></td>
              <td> </td>
              <td style="text-align:right"><?php echo "Php ".$_SESSION["subTotalPrice"]; ?></td>
            </tr>
            <tr>
              <td><small><font color="red">Concierge fee</font></small></td>
              <td> </td>
              <td style="text-align:right"><?php  echo "Php ".$_SESSION["concierge"]?></td>
            </tr>
            <tr>
              <td><small><font color="red">Delivery fee</font></small></td>
              <td> </td>
              <td style="text-align:right"><?php  echo "Php ".$_SESSION["deliveryfee"]?></td>
            </tr>
            <tr>
              <td><strong><font color='red'>Total amount</font></strong></td>
              <td> </td>
              <td style="text-align:right"><strong><?php echo "Php ".$_SESSION["subTotalPrice"]+$_SESSION["concierge"]+$_SESSION["deliveryfee"]; ?></strong></td>
            </tr>
          </table>
        </div>
        <center><button type="submit" class="btn btn-success">PLACE ORDER</center>
        </form>
      </div>
    </div>
  </div>
  <!-- end of body -->

  <a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing-1.3.min.js"></script>
  <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
  <script src="assets/js/shop.js"></script>
</body>
</html>
