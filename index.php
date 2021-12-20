<!-- Authored by: Matt Wilfred Cabunoc Salvador -->

<?php

$host="localhost";
$user="root";
$password="root";
$db="users";

/** If you are using WAMP or any other platform, please use the one below for the password only. **/

/** $password=""; **/

session_start();

$conn=mysqli_connect($host,$user,$password,$db);
/** **/
if (!$conn){

    die("connection error");
}

/** **/
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="SELECT * FROM login WHERE username='".$username."' AND password='".$password."'
    ";

    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

/** **/
    if($row["usertype"]=="user"){
        $_SESSION["username"]=$username;
        echo "user";
        header("location:userhome.php");

    } elseif($row["usertype"]=="admin"){
        $_SESSION["username"]=$username;
        echo "admin";
        header("location:adminhome.php");
    } else {
        echo "username or password incorrect";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./assets/css/styles.css" /> 
        <link rel="stylesheet" type="text/css" href="./assets/css/loginpage.css" />
        <title>Welcome to HexCon!</title>
    </head>

    <body>
      <div id="bodydiv">
          <img src="./assets/img/login1.png" class="login-img">
        <div class="logindiv">
            <h3 id="logintitle"> Sign In </h3>
            <form action="#" method="POST">
                <div class="field">
                    <input type="text" name="username" placeholder="Username" required>
                </div>

                <div class="field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <br>
                <div class="submitbtn">
                    <input id="submitbutton" type="submit" value="Sign In">
                </div>

            </form>

            <div id="signupdiv">
                <label> Not a member? <label>
                <a href="./signup.php">Sign Up</a>
            </div>
        </div>
      </div>
    </body>
</html>
