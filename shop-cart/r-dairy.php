<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Grocery2Go</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>

    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">



  </head>
<body>

<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span6">
	<h1>
	<a class="logo" href="index.html"><span>Grocery2Go</span>
		<img src="assets/img/g2g.png" alt="grocery2go">
	</a>
	</h1>
	</div>
  <div class="span6">

  </div>

  </div>
</header>

<!--
Navigation Bar Section
-->

<div class="navbar">
	  <div class="navbar-inner">
		<div class="container-fluid">

		  <div class="nav-collapse">

        <ul class="nav">
          <li class=""><a href="home.php">Home</a></li>
          <li class=""><a href="profile.php">Profile</a></li>
          <li class=""><a href="faqs.php">FAQs</a></li>
          <li class=""><a href="">Live Track</a></li>
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
<div class="span12">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list promowrapper">
<h3>Categories</h3>
<li><a href="r-drinks.php"><span class="icon-chevron-right"></span>Drinks</a></li>
<li><a href="r-dairy.php"><span class="icon-chevron-right"></span>Dairy</a></li>
<li><a href="r-freshvegg.php"><span class="icon-chevron-right"></span>Fresh Vegetable</a></li>
<li><a href="r-freshmeat.php"><span class="icon-chevron-right"></span>Fresh Meat</a></li>
<li><a href="r-freshfruit.php"><span class="icon-chevron-right"></span>Fresh Fruits</a></li>
<li><a href="r-canned.php"><span class="icon-chevron-right"></span>Canned & Packaged</a></li>
<li><a href="r-household.php"><span class="icon-chevron-right"></span>Household & Cleaning</a></li>
<li><a href="r-beauty.php"><span class="icon-chevron-right"></span>Beauty</a></li>
<li><a href="r-health.php"><span class="icon-chevron-right"></span>Health</a></li>
	</ul>
  <div class="well well-small alert alert-warning cntr">
    <h3>Cash on Delivery only </h3>
    <br />
  </div>
</div>
	</div>



	<div class="span6">

    <div class="container">

      <div class="well well-small">
      <h3>Dairy</h3>
        <div class="row-fluid">
          <?php
          require_once "ShoppingCart.php";


        $member_id =$_SESSION["cid"]; // you can your integerate authentication module here to get logged in member

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
                              $shoppingCart->addToCart($productResult[0]["id"], $_POST["quantity"], $member_id);
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
          <HTML>
          <HEAD>
          <TITLE></TITLE>
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <link href="style1.css" type="text/css" rel="stylesheet" />
          <script src="jquery-3.2.1.min.js"></script>
          <script>
          function increment_quantity(cart_id, price) {
              var inputQuantityElement = $("#input-quantity-"+cart_id);
              var newQuantity = parseInt($(inputQuantityElement).val())+1;
              var newPrice = newQuantity * price;
              save_to_db(cart_id, newQuantity, newPrice);
          }

          function decrement_quantity(cart_id, price) {
              var inputQuantityElement = $("#input-quantity-"+cart_id);
              if($(inputQuantityElement).val() > 1)
              {
              var newQuantity = parseInt($(inputQuantityElement).val()) - 1;
              var newPrice = newQuantity * price;
              save_to_db(cart_id, newQuantity, newPrice);
              }
          }

          function save_to_db(cart_id, new_quantity, newPrice) {
          	var inputQuantityElement = $("#input-quantity-"+cart_id);
          	var priceElement = $("#cart-price-"+cart_id);
              $.ajax({
          		url : "update_cart_quantity.php",
          		data : "cart_id="+cart_id+"&new_quantity="+new_quantity,
          		type : 'post',
          		success : function(response) {
          			$(inputQuantityElement).val(new_quantity);
                      $(priceElement).text("$"+newPrice);
                      var totalQuantity = 0;
                      $("input[id*='input-quantity-']").each(function() {
                          var cart_quantity = $(this).val();
                          totalQuantity = parseInt(totalQuantity) + parseInt(cart_quantity);
                      });
                      $("#total-quantity").text(totalQuantity);
                      var totalItemPrice = 0;
                      $("div[id*='cart-price-']").each(function() {
                          var cart_price = $(this).text().replace("$","PHP");
                          totalItemPrice = parseInt(totalItemPrice) + parseInt(cart_price);
                      });
                      $("#total-price").text(totalItemPrice);
          		}
          	});
          }
          </script>

          </HEAD>
          <BODY>
          <?php
          $cartItem = $shoppingCart->getMemberCartItem($member_id);
          if (! empty($cartItem)) {
              $item_quantity = 0;
              $item_price = 0;
              if (! empty($cartItem)) {
                  foreach ($cartItem as $item) {
                      $item_quantity = $item_quantity + $item["quantity"];
                      $item_price = $item_price + ($item["price"] * $item["quantity"]);
                  }
              }
          }
          ?>
              <div id="shopping-cart">
                  <div class="txt-heading">
                      <div class="txt-heading-label">Shopping Cart</div>

                      <a id="btnEmpty" href="r-dairy.php?action=empty"><img
                          src="empty-cart.png" alt="empty-cart" title="Empty Cart"
                          class="float-right" /></a>
                      <div class="cart-status">
                          <div>Total Quantity: <span id="total-quantity"><?php echo $item_quantity; ?></span></div>
                          <div>Total Price: <span id="total-price"><?php echo $item_price; ?></span></div>

                      </div>
                  </div>
          <?php
          if (! empty($cartItem)) {
              ?>
          <div class="shopping-cart-table">
                      <div class="cart-item-container header">
                          <div class="cart-info title">Title</div>
                          <div class="cart-info">Quantity</div>
                          <div class="cart-info price">Price</div>
                      </div>
          <?php
              foreach ($cartItem as $item) {
                  ?>
          				<div class="cart-item-container">
                          <div class="cart-info title">
                              <?php echo $item["name"]; ?>
                          </div>

                          <div class="cart-info quantity">
                              <div class="btn-increment-decrement" onClick="decrement_quantity(<?php echo $item["cart_id"]; ?>, '<?php echo $item["price"]; ?>')">-</div><input class="input-quantity"
                                  id="input-quantity-<?php echo $item["cart_id"]; ?>" value="<?php echo $item["quantity"]; ?>"><div class="btn-increment-decrement"
                                  onClick="increment_quantity(<?php echo $item["cart_id"]; ?>, '<?php echo $item["price"]; ?>')">+</div>
                          </div>

                          <div class="cart-info price" id="cart-price-<?php echo $item["cart_id"]; ?>">
                                  <?php echo "PHP ". ($item["price"] * $item["quantity"]); ?>
                              </div>


                          <div class="cart-info action">
                              <a
                                  href="r-dairy.php?action=remove&id=<?php echo $item["cart_id"]; ?>"
                                  class="btnRemoveAction"><img
                                  src="icon-delete.png" alt="icon-delete"
                                  title="Remove Item" /></a>
                          </div>
                      </div>
          				<?php
              }
              ?>
          </div>
            <?php
          }
          ?>
          <form class="" action="cart.php" method="post">

            <input type="submit" name="checkout" value="CHECKOUT">
          </form>
          </div>
          <?php require_once "r-dairy-list.php"; ?>

          </BODY>
          </HTML>

        </div>


      </div>
    </div>

	<!--
	Featured Products
	-->
  <div id="inner">
    <?php
      include 'chat.html';
     ?>
  </div>


<!--
Clients
-->

<!--
Footer
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
</div>/container -->


  </body>
</html>
