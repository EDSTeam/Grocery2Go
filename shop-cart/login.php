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


<!--
Lower Header Section
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="index.html"><span></span>
		<img src="assets/img/g2g.png" alt="grocery2go">
	</a>
	</h1>
	</div>
	<div class="span4">

	</div>
	<!--<div class="span4 alignR">
	<p><br> <strong> Support (24/7) : 1234 678 </strong><br><br></p>
	</div>
</div>-->
</header>

<!--
Navigation Bar Section
-->

<!--
Body Section
-->
	<div class="row">

	<div class="span12">


	<hr class="soft"/>

	<div class="row">
		<div class="span6">
			<div class="well">
			<h5>CREATE YOUR ACCOUNT</h5><br/>

			<form action="signup.php" method="post">
			  <div class="control-group">
				E-mail address
				<div class="controls">
				  <input class="span3"  type="text" placeholder="Email" name="email" id="email">
				</div>
      Username
				<div class="controls">
				  <input class="span3"  type="text" placeholder="username" name="username" id="username" required>
				</div>
      Password
        <div class="controls">
				  <input class="span3"  type="Password" placeholder="password" name="username" id="username" required>
				</div>

      First Name
        <div class="controls">
          <input class="span3"  type="text" placeholder="firstname" name="firstname" id="firstname" required>
        </div>

        Last Name
          <div class="controls">
            <input class="span3"  type="text" placeholder="lastname" name="lastname" id="lastname" required>
          </div>

          Mobile Number
            <div class="controls">
              <input class="span3"  type="text" placeholder="mobilenumber" name="mobilenumber" id="mobilenumber" required>
            </div>

          Address
              <div class="controls">
                <input class="span3"  type="text" placeholder="address" name="address" id="address" required>
              </div>

			  </div>
			  <div class="controls">
			  <button type="submit" class="btn block">Create Your Account</button>
			  </div>
			</form>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span6">
			<div class="well">
			<h5>ALREADY REGISTERED ?</h5>
			<form action="login.php" method="post">
			  <div class="control-group">
				<label class="control-label" for="inputEmail">Username<label>
				<div class="controls">
				  <input class="span3"  type="text" placeholder="username" name="username" id="username">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				  <input type="Password" class="span3" placeholder="Password" name="password" id="password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="defaultBtn">Sign in</button> <a href="#">Forget password?</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>

</div>
</div>
<!--
Clients
-->

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


<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
