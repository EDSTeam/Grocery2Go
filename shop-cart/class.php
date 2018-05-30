<?php

class Dbconnect{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "grocery2go";


  function getConnection(){
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
      return $conn;
  }

  function insertSummary($cid,$qty,$subtotal,$concierge,$deliveryfee,$finaltotal){

  $conn=getConnection();
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql="INSERT INTO `cart_summary`(`cid`,`total_qty`, `sub_total_price`, `concierge_fee`, `delivery_fee`, `total_price`)
  VALUES ('$qty','$subtotal','$concierge','$deliveryfee','$finaltotal')";
  if($conn->query($sql)==FALSE){
    die("Query failed".$conn->connect_error);
  }else {
    echo "successfully inserted";
  }
  $conn->close();
  }
}
 ?>
