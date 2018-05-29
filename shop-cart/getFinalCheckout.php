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
$sqlGetProduct = "SELECT b.name AS 'Product Name',a.quantity AS 'Quantity', b.price AS 'Price'
 FROM tbl_cart a INNER JOIN tbl_product b where a.product_id=b.id AND a.member_id=".$_SESSION["cid"];
//SELECT b.name AS 'Product Name',a.quantity AS 'Quantity', b.price AS 'Price' FROM tbl_cart a INNER JOIN tbl_product b where a.product_id=b.id AND a.member_id=59
echo $sqlGetProduct;
$resulta = $conn->query($sqlGetProduct);

if ($resulta->num_rows > 0) {
    // output data of each row
    while($row = $resulta->fetch_assoc()) {
    echo $row["Product Name"]. " ".$row["Quantity"]." ".$row["Price"]."<br />";
    }
} else {
    echo "0 results";
}

 ?>
