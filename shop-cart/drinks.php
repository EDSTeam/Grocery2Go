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
				<a class="active" href="index.html"> <span class="icon-home"></span> Home</a>
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
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="index.html"><span>Twitter Bootstrap ecommerce template</span>
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
        <li class="active"><a href="index.php">Home	</a></li>
        <!--<li class=""><a href="grid-view.html">Shop Now</a></li>-->
        <li class=""><a href="general.php">FAQs</a></li>
        <li class=""><a href="help.php">Help</a></li>
        <li class=""><a href="livetrack.php">Live Track</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
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
	<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
    <li><a href="drinks.php"><span class="icon-chevron-right"></span>Drinks</a></li>
  		<li><a href="dairy.php"><span class="icon-chevron-right"></span>Dairy</a></li>
  		<li><a href="eggs-chilled-food.php"><span class="icon-chevron-right"></span>Eggs & Chilled Food</a></li>
  		<li><a href="veggie.php"><span class="icon-chevron-right"></span>Fresh Vegetable</a></li>
  		<li><a href="meat.php"><span class="icon-chevron-right"></span>Fresh Meat</a></li>
  		<li><a href="fruity.php"><span class="icon-chevron-right"></span>Fresh Fruits</a></li>
  		<li><a href="canned.php"><span class="icon-chevron-right"></span>Canned & Packaged</a></li>
  		<li><a href="house.php"><span class="icon-chevron-right"></span>HouseHold & Cleaning</a></li>
  		<li><a href="health-beauty.php"><span class="icon-chevron-right"></span>Health & Beauty </a></li>	</ul>
  <div class="well well-small alert alert-warning cntr">
    <h3>Cash on Delivery only</h3>
    <br />
  </div>
</div>

			 <!-- <div class="
        well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p>
					 only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				  </p>
			  </div>-->



			<ul class="nav nav-list promowrapper">
		<!-- side bar-->
		  </ul>

	</div>
	<div class="span9">

<!--
New Products
-->
<div class="well well-small">
<h3>Our Products </h3>
  <div class="row-fluid">
    <ul class="thumbnails">
    <li class="span4">
      <div class="thumbnail">
      <a href="product_details.html" class="overlay"></a>
      <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
      <a href="product_details.html"><img src="shop-cart/assets/Products/Drinks/wilkins.jpg" alt=""></a>
      <div class="caption cntr">
        <p>Wilkins Distilled Water</p>
        <p><strong>PHP63.75</strong></p>
        <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
        <div class="actionList">
          <a class="pull-left" href="#">Add to Wish List </a>
          <a class="pull-left" href="#"> Add to Compare </a>
        </div>
        <br class="clr">
      </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
      <a href="product_details.html" class="overlay"></a>
      <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
      <a href="product_details.html"><img src="assets/img/b.jpg" alt=""></a>
      <div class="caption cntr">
        <p>item</p>
        <p><strong>price</strong></p>
        <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
        <div class="actionList">
          <a class="pull-left" href="#">Add to Wish List </a>
          <a class="pull-left" href="#"> Add to Compare </a>
        </div>
        <br class="clr">
      </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
      <a href="product_details.html" class="overlay"></a>
      <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
      <a href="product_details.html"><img src="assets/img/c.jpg" alt=""></a>
      <div class="caption cntr">
        <p>item name</p>
        <p><strong>price</strong></p>
        <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
        <div class="actionList">
          <a class="pull-left" href="#">Add to Wish List </a>
          <a class="pull-left" href="#"> Add to Compare </a>
        </div>
        <br class="clr">
      </div>
      </div>
    </li>
    </ul>
  </div>
<div class="row-fluid">
    <ul class="thumbnails">
    <li class="span4">
      <div class="thumbnail">
      <a href="product_details.html" class="overlay"></a>
      <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
      <a href="product_details.html"><img src="assets/img/d.jpg" alt=""></a>
      <div class="caption cntr">
        <p>item name</p>
        <p><strong>price</strong></p>
        <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
        <div class="actionList">
          <a class="pull-left" href="#">Add to Wish List </a>
          <a class="pull-left" href="#"> Add to Compare </a>
        </div>
        <br class="clr">
      </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
      <a href="product_details.html" class="overlay"></a>
      <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
      <a href="product_details.html"><img src="assets/img/e.jpg" alt=""></a>
      <div class="caption cntr">
        <</p>
        <p><strong></strong></p>
        <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
        <div class="actionList">
          <a class="pull-left" href="#">Add to Wish List </a>
          <a class="pull-left" href="#"> Add to Compare </a>
        </div>
        <br class="clr">
      </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
      <a href="product_details.html" class="overlay"></a>
      <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
      <a href="product_details.html"><img src="assets/img/f.jpg" alt=""></a>
      <div class="caption cntr">
        <p>item name</p>
        <p><strong> $22.00</strong></p>
        <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
        <div class="actionList">
          <a class="pull-left" href="#">Add to Wish List </a>
          <a class="pull-left" href="#"> Add to Compare </a>
        </div>
        <br class="clr">
      </div>
      </div>
    </li>
    </ul>
  </div>
<div class="row-fluid">
    <ul class="thumbnails">
    <li class="span4">
      <div class="thumbnail">
      <a href="product_details.html" class="overlay"></a>
      <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
      <a href="product_details.html"><img src="assets/img/g.jpg" alt=""></a>
      <div class="caption cntr">
        <p>item name</p>
        <p><strong> $22.00</strong></p>
        <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
        <div class="actionList">
          <a class="pull-left" href="#">Add to Wish List </a>
          <a class="pull-left" href="#"> Add to Compare </a>
        </div>
        <br class="clr">
      </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
      <a href="product_details.html" class="overlay"></a>
      <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
      <a href="product_details.html"><img src="assets/img/h.jpg" alt=""></a>
      <div class="caption cntr">
        <p>item name</p>
        <p><strong> $22.00</strong></p>
        <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
        <div class="actionList">
          <a class="pull-left" href="#">Add to Wish List </a>
          <a class="pull-left" href="#"> Add to Compare </a>
        </div>
        <br class="clr">
      </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
      <a href="product_details.html" class="overlay"></a>
      <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
      <a href="product_details.html"><img src="assets/img/i.jpg" alt=""></a>
      <div class="caption cntr">
        <p>item name</p>
        <p><strong> $22.00</strong></p>
        <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
        <div class="actionList">
          <a class="pull-left" href="#">Add to Wish List </a>
          <a class="pull-left" href="#"> Add to Compare </a>
        </div>
        <br class="clr">
      </div>
      </div>
    </li>
    </ul>
  </div>


    <li class="span4">
      <div class="thumbnail">
      <a href="product_details.html" class="overlay"></a>
      <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
      <a href="product_details.html"><img src="assets/img/c.jpg" alt=""></a>
      <div class="caption cntr">
        <p>item name</p>
        <p><strong> $22.00</strong></p>
        <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
        <div class="actionList">
          <a class="pull-left" href="#">Add to Wish List </a>
          <a class="pull-left" href="#"> Add to Compare </a>
        </div>
        <br class="clr">
      </div>
      </div>
    </li>
    </ul>
  </div>

</div>
	<!--
	Featured Products
	-->
		<div class="well well-small">
		  <h3><a class="btn btn-mini pull-right" href="products.html" title="View more">VIew More<span class="icon-plus"></span></a> Featured Products  </h3>
		  <hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="product_details.html"><img src="" alt=""></a>
				<div class="caption">
				  <h5>Drinks</h5>
				  <h4>
					  <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">$22.00</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="product_details.html"><img src="" alt=""></a>
				<div class="caption">
				  <h5>item name</h5>
				  <h4>
					  <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">$22.00</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="product_details.html"><img src="" alt=""/></a>
				<div class="caption">
				  <h5>item name</h5>
				  <h4>
					  <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">$22.00</span>
				  </h4>
				</div>
			  </div>
			</li>
		  </ul>
	</div>
	</div>

	<div class="well well-small">
	<a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
	Popular Products
	</div>
	<hr>
	<div class="well well-small">
	<a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
	Best selling Products
	</div>
	</div>
	</div>
<!--
Clients
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div class="span2">
			<a href="#"><img alt="" src=""></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src=""></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src=""></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src=""></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src=""></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src=""></a>
		</div>
	</div>
</section>

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
	<p class="pull-right">
		<a href="#"><img src="assets/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="assets/img/mc.png" alt="payment"></a>
		<a href="#"><img src="assets/img/pp.png" alt="payment"></a>
		<a href="#"><img src="assets/img/visa.png" alt="payment"></a>
		<a href="#"><img src="assets/img/disc.png" alt="payment"></a>
	</p>
	<span>Copyright &copy; 2013<br> bootstrap ecommerce shopping template</span>
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
