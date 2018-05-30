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
$qty=$_SESSION["total_qty"];
$subtotal=$_SESSION["subTotalPrice"];
$concierge=$_SESSION["concierge"];
$deliveryfee=$_SESSION["deliveryfee"];
$finaltotal=$_SESSION["finalTotal"];
$cid=$_SESSION["cid"];
$sql="INSERT INTO `cart_summary`(`cid`,`total_qty`, `sub_total_price`, `concierge_fee`, `delivery_fee`, `total_price`)
VALUES ('$cid','$qty','$subtotal','$concierge','$deliveryfee','$finaltotal')";
echo $sql;
if($conn->query($sql)==FALSE){
  die("Query failed".$conn->connect_error);
}else {
  echo "successfully inserted";
}
$conn->close();

  //header('Location: getID.php');

 ?>
