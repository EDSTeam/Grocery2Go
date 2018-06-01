<?php
  $db = mysqli_connect('localhost','root','') or die("cannot connect");
  mysqli_select_db($db,"grocery2go") or die("cannot select DB ");


  if(isset($_POST['email']) and isset($_POST['password'])) {
      // username and password sent from form

      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']);

      echo $email;
      echo $password;

      $sql = "SELECT * FROM customer_details WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($db,$sql) or die(mysqli_error($db));
      $row = mysqli_fetch_array($result);
      $firstName = $row['firstname'];
      $username = $row['username'];
      $count = mysqli_num_rows($result);

      echo $count;


      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         //session_register("myusername");
         session_start();
         $_SESSION['firstname'] = $firstName;
         $_SESSION['username'] = $username;
         echo "redirect me";
         header('Location:getID.php');
      }else {
         header("Location:index.php?loginFailed=true&reason=password");
      }
   }

?>
