<!DOCTYPE html>
<html>
<head></head>
<body>
  <?php
    $servername="localhost ";
    $serverusername="root";
    $serverpassword="";
    $dbname="grocery2go";
        //try to establis connection
      $conn= new mysqli($servername,$sereverusername,$serverpassword,$dbname);

      if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
      }

      $firstname=$POST_['firstname'];
      $username=$POST_["username"];
      $lastname=$POST_["lastname"];
      $mobilenumber=$POST_["mobilenumber"];
      $address=$POST_["address"];
      $email=$POST_["email"];
      $password=$POST_["password"];


      $sql= "INSERT INTO customer_details (firstname,lastname,address,phoneNumb,email,username,password)
      VALUES('$firstname','$lastname','$address','$mobilenumber','$email','$username','$password')";

      if($conn->query($sql)==FALSE){
        die("Query failed".$conn->connect_error);
      }
      $conn->close();

      header('Location: index.html');
  ?>
</body>
</html>
