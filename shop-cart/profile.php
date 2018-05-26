<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <style>
      input[type=text],input[type=password]{
        padding:5px;
      }
    </style>

  </head>

  <body>
    <?php
      $servername ="localhost";
      $user="root";
      $pass="";
      $db="grocery2go";

      $conn= new mysqli($servername,$user,$pass,$db);

      if(!$conn){
        die("Connection failed: ".mysqli_connect);
      }

      $firstname;
      $lastname;
      $address;
      $phoneNumb;
      $email;


      $sql="SELECT firstname,lastname,address,phoneNumb,email FROM customer_details";
      $result=mysqli_query($conn,$sql);

      if(mysqli_num_rows($result)>0){

        $row=mysqli_fetch_assoc($result);

        $firstname=$row["firstname"];
        $lastname=$row["lastname"];
        $address=$row["address"];
        $phoneNumb=$row["phoneNumb"];
        $email=$row["email"];
      }
    ?>

    <!--header-->

    <div class=" well container">

        <div class="container">

          <div class="row">
            <div class="span8 offset2">
              <form class="form-horizontal">
                <fieldset>
                  <legend class="text-center">Profile</legend>
                  <div class="control-group">
                    <label class="control-label">Name</label>
                    <div class="controls">
                      <input  class="span2" type="text" placeholder="<?$firstname?>">
                      <input class="span2" type="text"  placeholder="<?$lastname?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Email</label>
                    <div class="controls">
                      <input class="span4" type="text" placeholder="<?$email?>" disabled>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Mobile #</label>
                    <div class="controls">
                      <input class="span4" type="text" placeholder=""<?$phoneNumb?>"">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Address</label>
                    <div class="controls">
                      <input class="span4" type="text" placeholder=""<?$address?>"">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <label class="control-label">
                        <button type="submit" class="btn btn-warning">SAVE</button>
                      </label>
                    </div>
                  </div>
                </fieldset>
              </form>

              <form class="form-horizontal">
                <fieldset>
                  <legend class="text-center">Password</legend>
                  <div class="control-group">
                    <label class="control-label">Current Password</label>
                    <div class="controls">
                      <input class="span4" type="password">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">New Password</label>
                    <div class="controls">
                      <input class="span4" type="password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <label class="control-label">
                        <button type="submit" class="btn btn-warning">SAVE</button>
                      </label>
                    </div>
                  </div>
                </fieldset>
              </form>

          </div>
        </div>
      </div>
    </div>



</body>
</html>
