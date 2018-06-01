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

          <li class=""><a href="home.php">Home</a></li>
          <li class=""><a href="profile.php">Profile</a></li>
          <li class="active"><a href="faqs.php">FAQs</a></li>
          <li class=""><a href="livetrack.html">Live Track</a></li>
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
  <!--BADEH-->
  <div class="container">
    <div class="well well-small" style="padding:20px">
      <div class="row-fluid" style="padding:10px 20px 10px 0px;">
        <h3 class="text-center">How can we help you with?</h3>
      </div>

      <div class="accordion" id="accordion2">
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOrders"
            style="font-size:25px;text-decoration:none;color:black;padding:15px">
              Orders
            </a>
          </div>
          <div id="collapseOrders" class="accordion-body collapse in">
            <div class="accordion-inner"
            style="padding:30px">
            <h5> > Is there a minimum order?</h5>
            <p>There is none but charges will apply depending on the total amount.</p>
            <h5> > What stores can i shop from?</h5>
            <p>The stores you can shop from are Rustan's supermarket and SM supermarket
            that are within Bonfifacio Global city in Taguig and in Makati. </p>
            <h5> > Where does my order come from?</h5>
            <p>The products you order are picked by our concierge shoppers.</p>
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
            style="padding:30px">
              <h5> > What are the available payment methods?</h5>
                <p>You can only pay through cash on delivery.</p>
              <h5> > Do you have special discounts?</h5>
              <p>Senior citizens and PWDs can avail a 20% discount when they call in to order
              their grocery items and present their respective cards when the items are delivered</p>
              <h5> > How much is the concierge fee?</h5>
              <p>There will be a concierge fee of Php 99 for concierge shoppers</p>
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
            style="padding:30px">
            <h5>  > What are the delivery hours?</h5>
              <p>   Delivery time period is between 9am to 8pm with delivery slots
              intervals every hour.</p>
            <h5> > Where are the available places for delivery?</h5>
              <p>   Places within Makati and Bonifacio Global City only.</p>
            <h5> > Is there a delivery fee?</h5>
              <p> Minimum orders of Php 2,500 have no delivery fee but orders below
              will be charged with a standard fee of Php 40.</p>
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
            style="padding:30px">
            <h5> > Who are your partnered stores?</h5>
            <p>Partner stores of Rustan's and SM supermarket within Makati And
            Bonifacio Global City in Taguig</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
    <!--BADEH-->
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
  </body>
</html>
