<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grocery2go";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customer_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      if ($_SESSION["username"]==$row["username"]) {
$_SESSION["cid"]=$row["cid"];
      }
    }
} else {
    echo "0 results";
}
$conn->close();
  header('Location: home.php');
 ?>
