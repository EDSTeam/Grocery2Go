<?php
  session_start();

  if (!isset($_SESSION["firstname"])) {
  header ('Location:index.php');
  }


if (!isset($_SESSION)) {
header ('Location:verify.php');
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
<div id="gototop"> </div>
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
        <li class=""><a href="faqs.php">FAQs</a></li>
          <li class=""><a href="livetrack.php">Live Track</a></li>
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
<!--
Body Section
-->
	<div class="row">
<div id="sidebar" class="span3">


			<ul class="nav nav-list promowrapper">
		<!-- side bar-->
		  </ul>

	</div>
	<div class="span12">
	<div class="well np">
		<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
              <div class="item">
                      <img style="width:100%" src="assets/img/g2gLogo.jpg" alt="bootstrap ecommerce templates">
                      <div class="carousel-caption">
                          <!--  <h4>Grocery2Go</h4>-->
                            <p><span>Start Shopping Now</span></p>
                      </div>
                    </div>
			  <div class="item">
                <img style="width:100%" src="assets/img/sld5.png" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Grocery2Go</h4>
                      <p><span>Start Shopping now</span></p>
                </div>
              </div>

			       <div class="item active">
                <img style="width:100%" src="assets/img/sld2.jpg" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                <!--      <h4>Twitter Bootstrap cart</h4>-->
                <!--      <p><span>Very easy to integrate and expand.</span></p>-->
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>
<!--
New Products
-->
	<div class="well well-small">
	<h3>Grocery Stores </h3>
	<hr class="soften"/>
		<div class="row-fluid">
		<div id="newProductCar" class="carousel slide">
            <div class="carousel-inner">

		  <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
		  </div>
		  </div>
		<div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span6">
			  <div class="thumbnail">

				<a class="zoomTool" href="drinks.php" title="add to cart"><span class="icon-search"></span>SHOP NOW</a>
				<a href="drinks.php">

			          <img src="assets\img\sm.png" alt=""></a>
		</div>
			</li>
			<li class="span6">
			  <div class="thumbnail">

				<a class="zoomTool" href="r-drinks.php" title="add to cart"><span class="icon-search"></span>SHOP NOW</a>
				<a href="r-drinks.php"><img src="assets\img\rustans.png" alt=""></a>

				</div>
			  </div>
			</li>

		  </ul>
		</div>
	</div>

<!--
Footer
-->
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
</div><!-- /container -->

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
  </body>
</html>
