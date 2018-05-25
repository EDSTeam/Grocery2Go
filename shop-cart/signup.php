<!DOCTYPE html>
<html>
<head></head>
<body>
  <?php
    $servername="localhost";
    $serverusername="root";
    $serverpassword="";
    $dbname="grocery2go";
        //try to establis connection
      $conn= new mysqli($servername,$serverusername,$serverpassword,$dbname);

      if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
      }

      $firstname=$_POST['firstname'];
      $username=$_POST['username'];
      $lastname=$_POST['lastname'];
      $mobilenumber=$_POST['phoneNumb'];
      $address=$_POST['address'];
      $email=$_POST['email'];
      $password=$_POST['password'];

      $sql= "INSERT INTO customer_details (firstname,lastname,address,phoneNumb,email,username,password)
      VALUES('$firstname','$lastname','$address','$mobilenumber','$email','$username','$password')";

      if($conn->query($sql)==FALSE){
        die("Query failed".$conn->connect_error);
      }
      $conn->close();

      header('Location: index.php');
  ?>
</body>
</html>
