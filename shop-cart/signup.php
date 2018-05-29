
  <?php
  session_start();

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

$sqlgetData = "SELECT * FROM customer_details";
$res = $conn->query($sqlgetData);
$num_row=mysqli_num_rows($res);
if ($username==null) {
  echo $message="<font color='red'>Invalid entry, please Register again</font>";
    include 'register.php';
}
  $isfound =false;
if($num_row==0){
  $sql= "INSERT INTO customer_details (firstname,lastname,address,phoneNumb,email,username,password)
  VALUES('$firstname','$lastname','$address','$mobilenumber','$email','$username','$password')";
$_SESSION["username"]=$username;
  header('Location: home.php');
}else if($num_row > 0){
    while($getUsername = mysqli_fetch_assoc($res)) {
      if($getUsername["username"]==$username){
        $isfound = true;
                 }
       }
}
        if ($isfound) {
          echo $message="<font color='red'>Invalid entry, please Register again</font>";
            include 'register.php';
        }else {
          $sql= "INSERT INTO customer_details (firstname,lastname,address,phoneNumb,email,username,password)
          VALUES('$firstname','$lastname','$address','$mobilenumber','$email','$username','$password')";
         }

         //get id of user
      /*  $sqlID="SELECT * FROM customer_details";
         $resID = $conn->query($sqlID);
         $num_rowID=mysqli_num_rows($resID);

         if($num_rowID > 0){
             while($getData = mysqli_fetch_assoc($resID)) {
               if($getData["username"]==$username){
             $id=$getData["cid"];
             echo "get it";
                          }
                }
         }

         $_SESSION["id"]=$id;*/
          $_SESSION["username"]=$username;

              if($conn->query($sql)==FALSE){
                die("Query failed".$conn->connect_error);
              }$conn->close();
                header('Location: getID.php');



  ?>
