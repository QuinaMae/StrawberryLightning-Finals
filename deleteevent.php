<!-- Authored by: Santos, Christine Meg C. -->

<?php
include 'process.php';

/** **/
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $deletesql="DELETE FROM `events` WHERE id=$id";
    $result=mysqli_query($conn, $deletesql);

/** The data will be saved and user will be redirected to the adminhome or otherwise if an error has occured **/
    if($result){
        header('location:adminhome.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>
