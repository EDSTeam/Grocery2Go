<?php
require_once "ShoppingCart.php";
session_start();
$id_mem=$_SESSION["cid"];
          $member_id =$id_mem;  // you can your integerate authentication module here to get logged in member

$shoppingCart = new ShoppingCart();
if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (! empty($_POST["quantity"])) {


                $productResult = $shoppingCart->getProductByCode($_GET["code"]);

                $cartResult = $shoppingCart->getCartItemByProduct($productResult[0]["id"], $member_id);

                if (! empty($cartResult)) {
                    // Update cart item quantity in database
                    $newQuantity = $cartResult[0]["quantity"] + $_POST["quantity"];
                    $shoppingCart->updateCartQuantity($newQuantity, $cartResult[0]["id"]);
                } else {
                    // Add to cart table
                    $time =date("H:i:s");
                    $date =date("m/d/y");
                    $shoppingCart->addToCart($productResult[0]["id"], $_POST["quantity"], $member_id, $date, $time);
                }
            }
            break;
        case "remove":
            // Delete single entry from the cart
            $shoppingCart->deleteCartItem($_GET["id"]);
            break;
        case "empty":
            // Empty cart
            $shoppingCart->emptyCart($member_id);
            break;
    }
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
			<span class="icon-bar"></spana>
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
        <li><a href="register.html"><?php echo "Welcome, e".$_SESSION["firstname"];?></a></li>

      </ul>
		  </div>
		</div>
	  </div>
	</div>
<!--
Body Section
-->



	<div class="container">
	<div class="">

	<div class="well well-small">
		<h1>Check Out <small class="pull-right"></small></h1>
	<hr class="soften"/>

<br/>
<?php require 'basket.php' ?>
            <table class="">
			<tbody>
				 <tr>
                  <td>

				</td>
                </tr>

			</tbody>
				</table>

	<a href="freshmeat.php" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
	<a href="finalcheckout.php" class="shopBtn btn-large pull-right">	<button type="submit" class="shopBtn">Next</button><span class="icon-arrow-right"></span></a>

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
