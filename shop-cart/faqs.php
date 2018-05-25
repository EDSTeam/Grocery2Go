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
<!--<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a href="index.html"> <span class="icon-home"></span> Home</a>
				<a href="#"><span class="icon-user"></span> My Account</a>
				<a href="register.html"><span class="icon-edit"></span> Free Register </a>
				<a href="contact.html"><span class="icon-envelope"></span> Contact us</a>
				<a href="cart.html"><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> $448.42</span></a>
			</div>
		</div>
	</div>
</div>-->

<!--
Lower Header Section
  -->

  <!--<div class="span4 alignR">
  <p><br> <strong> Support (24/7) :  0800 1234 678 </strong><br><br></p>
  <span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>

</div>-->


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
        <li class=""><a href="index.html">Home	</a></li>
        <li class="active"><a href="general.html">FAQs</a></li>
          <li class=""><a href="help.html">Help</a></li>
          <li class=""><a href="livetrack.html">Live Track</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
        <li><a href="register.html">Sign Up</a></li>
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block">Sign in</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!--
Body Section
-->
  <!--<ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Page Title</li>
  </ul>-->
<div class="well well-small" style="padding:50px;">
  <div class="container">
    <h2 class="text-center">How can we help you?</h2>
  </div>

  <!--collapse-->
  <div class="accordion" id="accordion2">
    <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOrders"
        style="font-size:25px;text-decoration:none;color:black;padding:15px">
          Orders
        </a>
      </div>
      <div id="collapseOrders" class="accordion-body collapse out">
        <div class="accordion-inner"
        style="padding:40px">
          The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
           those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
           Malorum" by Cicero are also reproduced in their exact original form,
          accompanied by English versions from the 1914 translation by H. Rackham.
        </div>
      </div>
    </div>

    <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapsePayment"
        style="font-size:25px;text-decoration:none;color:black;padding:15px">
          Payment
        </a>
      </div>
      <div id="collapsePayment" class="accordion-body collapse out">
        <div class="accordion-inner"
        style="padding:40px">
          Anim pariatur cliche...
        </div>
      </div>
    </div>

    <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseDelivery"
        style="font-size:25px;text-decoration:none;color:black;padding:15px">
          Delivery
        </a>
      </div>
      <div id="collapseDelivery" class="accordion-body collapse out">
        <div class="accordion-inner"
        style="padding:40px">
          Anim pariatur cliche...
        </div>
      </div>
    </div>

    <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapsePartnership"
        style="font-size:25px;text-decoration:none;color:black;padding:15px">
          Partnership
        </a>
      </div>
      <div id="collapsePartnership" class="accordion-body collapse out">
        <div class="accordion-inner"
        style="padding:40px">
          Anim pariatur cliche...
        </div>
      </div>
    </div>
  </div>
  <!--collapse-->

</div>

</div>
</div>
<!--
Clients
-->

<!--
Footer
-->
<footer class="footer" style="padding:0">
<div class="row-fluid">
<div class="span2">
<h5>Your Account</h5>
 </div>
<div class="span2">
<h5>Iinformation</h5>
 </div>
<div class="span2">
<h5>Our Offer</h5>
 </div>
 <div class="span6">

 </div>
 </div>
</footer>
</div><!-- /container -->


<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>
