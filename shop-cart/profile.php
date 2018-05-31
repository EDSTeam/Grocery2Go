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
    <title>Twitter Bootstrap shopping cart</title>
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

    <style>
      input[type=text],input[type=password]{
        padding:5px;
      }
    </style>

  </head>

  <body>

    <!--header-->
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

        <!--badeh-->
    <div class="container">
      <div class="well well-small">
        <center><h3><soft>My Profile</soft></h3></center>
        <hr>
        <div class="row">
          <div class="span4 offset1">
            <img style="width:100%" src="assets/img/avatar.jpg"  class="img-rounded" alt="user profile picture">
            <center><h5><?php echo "$_SESSION["firstname"] $_SESSION["lastname"]"; ?></h5></center>
          </div>
          <div class="span5 offset1">
            <form>
              <span class="help-block"><strong>Email</strong></span>
              <input type="text"  class="span4" value="<?$_SESSION["email"]?>" disabled>
              <span class="help-block"><strong>Mobile Number</strong></span>
              <input type="text"  class="span4" value="<?$_SESSION["phoneNumb"]?>" placeholder="Mobile No.">
              <span class="help-block"><strong>Address 1</strong></span>
              <input type="text"  class="span4" value="<?$_SESSION["address"]?>" placeholder="Address">
              <span class="help-block"><strong>Address 2</strong></span>
              <input type="text"  class="span4" placeholder="Address 2">
              <span class="help-block"><strong></strong></span>
              <button type="submit" class="btn btn-success" style="margin-left:240px">Save</button>
            </form>
          </div>
        </div>



      </div>
    </div>
            <!--badeh-->
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




        <a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="assets/js/jquery.js"></script>
             <script src="assets/js/bootstrap.min.js"></script>
             <script src="assets/js/jquery.easing-1.3.min.js"></script>
            <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
            <script src="assets/js/shop.js"></script>


<? $conn->close();?>
</body>
</html>
