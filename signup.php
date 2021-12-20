<!-- Authored by: Matt Wilfred Cabunoc Salvador -->

<?php
include 'process.php';

/** The user will be asked to input these information in signing up as a new user **/
if(isset($_POST['signup'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $usertype = "user";

  $check="SELECT * FROM login WHERE username='$username'";

  $checker=mysqli_query($conn,$check);

  if($checker){

    /** The information registered upon signing up will be saved to the database to be used in the login function **/
    $sql="INSERT INTO `login` (username, password, firstName, surname, usertype)
      VALUES('$username', '$password', '$firstName', '$lastName', '$usertype')";

    $result=mysqli_query($conn,$sql);

    /** This is to validate if the user has input a similar username from the previous users **/
    if($result){
      header('location:index.php');
    }else{
      die(mysqli_error($conn));
    }

  }else{
    echo 'The username already exist. Please try another username!';
  }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./assets/css/styles.css" /> 
        <link rel="stylesheet" type="text/css" href="./assets/css/signuppage.css" />
        <title>Sign up</title>
    </head>
    <body>

    <?php require_once 'process.php'; ?>
        <div id="signupform">
            <form method="POST">
            <img src="./assets/img/reg.png" id="reg">
            <h4> Sign Up </h4> 
                <div class="divfield">

                    <div><label> Username </label><sub>REQUIRED</sub></div>
                    <input type="text" name="username" placeholder="Enter Username" required/>
                </div>               
                  
                  <div class="divfield">
                      <div><label> Password </label><sub>REQUIRED</sub></div>
                      <input type="password" name="password" placeholder="Enter Password" required/>
                  </div>

                  <div class="divfield">
                      <div><label> First Name </label><sub>REQUIRED</sub></div>
                      <input type="text" name="firstName" placeholder="Enter First Name" required/>
                  </div>

                  <div class="divfield">
                      <div><label> Last Name </label><sub>REQUIRED</sub></div>
                      <input type="text" name="lastName" placeholder="Enter Last Name" required/>
                  </div>

                  <div id="buttondiv">
                        <button type="submit" name="signup">Sign Up</button>
                  </div>
                </div>
                
            </form>
        </div>

    </body>
</html>
