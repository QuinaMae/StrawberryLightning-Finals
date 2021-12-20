<!-- Authored by: Matt Wilfred Cabunoc Salvador -->

<?php

$conn = new mysqli('localhost', 'root', 'root', 'users');

/** If you are using WAMP or any other platform, please use the one below. **/

/** $conn = new mysqli('localhost', 'root', '', 'users'); **/

if (!$conn){
    die(mysqli_error($conn));
}
?>
