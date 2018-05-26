<?php require_once  "cartdata.php" ?>
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
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>
<!--
	Upper Header Section
-->


<!--
Lower Header Section
-->
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
	<div class="span4 alignR">
	<p><br> <strong> Support (24/7) :  0800 1234 678 </strong><br><br></p>
	<span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>

	</div>
</div>
</header>

<!--
Navigation Bar Section
-->
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
        <li class="active"><a href="index.html">Home</a></li>
        <li class=""><a href="general.html">FAQs</a></li>
        <li class=""><a href="help.html">Help</a></li>
        <li class=""><a href="livetrack.html">Live Track</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
      <ul class="nav pull-right">
        <li><a href="register.html"><?php echo "Welcome, put username here"//.$_SESSION["username"];?></a></li>

      </ul>
		  </div>
		</div>
	  </div>
	</div>
<!--
Body Section
-->



	<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Check Out</li>
    </ul>
	<div class="well well-small">
		<h1>Check Out <small class="pull-right"></small></h1>
	<hr class="soften"/>

<br/>
<?php require 'basket.php' ?>
            <table class="table table-bordered">
			<tbody>
				 <tr>
                  <td>
				<form class="form-inline" action="getFinalCheckout.php" method="post">
				  <label style="min-width:159px">Change for: </label>
				<input type="text" class="input-medium" placeholder="Enter amount of change">


				</td>
                </tr>

			</tbody>
				</table>

	<a href="products.html" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
	<a href="login.html" class="shopBtn btn-large pull-right">	<button type="submit" class="shopBtn">Next</button><span class="icon-arrow-right"></span></a>
	</form>
</div>
</div>
</div>
<!--
Clients
-->


<!--
Footer
-->

<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>
