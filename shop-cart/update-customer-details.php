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

$tracking=$_SESSION["tarckNo"];
//$eid=
$cid=$_SESSION["cid"];
$date=$_POST["date"];
$location=$_POST["address"];
$time=$_POST["time"];
$landmark=$_POST["Landmark"];
$sql = "INSERT INTO `delivery_table`(`tracking_id`, `cid`, `eid`, `dt_date`, `dt_location`, `dt_time`, `landmark`)
VALUES('$tracking','$cid',1,'$date','$location','$time','$landmark')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
  header('Location: home.php');
 ?>
