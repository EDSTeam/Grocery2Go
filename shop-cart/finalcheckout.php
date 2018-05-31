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
  <div class="container">
  <header id="header">
  <div class="row">
    <div class="span4">
    <h1>
    <a class="logo" href="index.html"><span>Grocery2Go</span>
      <img src="assets/img/g2g.png" alt="grocery2go">
    </a>
    </h1>
    </div>
    <div class="span4">

    </div>

    </div>
  </header>
</div>

  <div class="container">
    <div class="navbar">
      <div class="navbar-inner">
      <div class="container">
        <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </a>

        <div class="nav-collapse">
        <ul class="nav">

          <li class="active"><a href="home.php">Home</a></li>
          <li class=""><a href="freshmeat.php">ShopNow</a></li>
          <li class=""><a href="faqs.php">FAQs</a></li>
          <li class=""><a href="">Live Track</a></li>
            <li class=""><a href="">Message</a></li>
            <li class=""><a href="profile.php">Profile</a></li>
        </ul>

        <ul class="nav pull-right">

          <li><a href=""><?php echo "Welcome, ".$_SESSION['firstname'];?></a></li>
          <li><a href="logout.php"><b>Sign out</b></a></li>


        </ul>
        </div>
      </div>
      </div>
    </div>
  </div>

  <!-- body -->
  <div class="container">
      <div class="well well-small">
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
            <div class="controls">
              <input class="span12"type="text"  name="address" placeholder="" value="<?php echo $_SESSION["address"]; ?>">
            </div>
            <div class="controls controls-row">
              <input class="span6" type="text" placeholder="Apt,Suite,etc(optional)">
              <input class="span6" type="text"  name="mobilenum" placeholder=""value="<?php echo $_SESSION["phoneNumb"]; ?>">
            </div>
            <textarea rows="3" name="Landmark" placeholder="Landmark and delivery instructions" name="instructions"></textarea>
          </fieldset>



          <fieldset>
            <legend>Delivery schedule</legend>
          </fieldset>
          <div class="row-fluid">
            <div class="span1">Time:</div>
            <div class="span1 offset5">Day:</div>
          </div>
          <select class="span6"  name="time">
            <option value="9:00-10:00am"selected>Select time</option>
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
          <select class="span6" name="date">
            <option value="06/02/18">Today, 2 June</option>
            <option value="06/03/18">3 June</option>
            <option value="06/04/18">4 June</option>
            <option value="06/05/18">5 June</option>
            <option value="06/06/18">6 June</option>
            <option value="06/07/18">7 June</option>
          </select>

          <legend>Payment</legend>
            <label class="radio">
              <input type="radio" name="cashondelviery" id="option" value="option1" checked>
              Cash on Delivery <?php if (  $_SESSION["total_qty"]!=0){
                ?><p><font color='red'><h3>Tracking No.</h3> <h2><?php echo  $_SESSION["tarckNo"]=rand(); ?></h2> </font></p>
              <?php

            } ?>

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
              <td style="text-align:right"><strong><?php echo "Php ".$_SESSION["finalTotal"]; ?></strong></td>
            </tr>
          </table>
        </div>
        <center><button onclick="myFunction()" type="submit" class="btn btn-success">Place Order</center>
          <p id="demo"></p>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
<footer class="footer">
<div class="row-fluid">
<div class="span2">
<h5>Your Account</h5>
<a href="#">YOUR ACCOUNT</a><br>
<a href="#">PERSONAL INFORMATION</a><br>
<a href="#">ADDRESSES</a><br>
<a href="#">DISCOUNT</a><br>
<a href="#">ORDER HISTORY</a><br>
 </div>
<div class="span2">
<h5>Iinformation</h5>
<a href="contact.html">CONTACT</a><br>
<a href="#">SITEMAP</a><br>
<a href="#">LEGAL NOTICE</a><br>
<a href="#">TERMS AND CONDITIONS</a><br>
<a href="#">ABOUT US</a><br>
 </div>
<div class="span2">
<h5>Our Offer</h5>
<a href="#">NEW PRODUCTS</a> <br>
<a href="#">TOP SELLERS</a><br>
<a href="#">SPECIALS</a><br>
<a href="#">MANUFACTURERS</a><br>
<a href="#">SUPPLIERS</a> <br/>
 </div>
 <div class="span6">
<h5>The standard chunk of Lorem</h5>
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
 those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
 Malorum" by Cicero are also reproduced in their exact original form,
accompanied by English versions from the 1914 translation by H. Rackham.
 </div>
 </div>
</footer>
</div>

<div class="copyright">
<div class="container">
<span>Copyright &copy; 2018 - Grocery2Go</span>
</div>
</div>


<script>
function myFunction() {
    var txt;
    if (confirm("Thank you for shopping!")) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
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
