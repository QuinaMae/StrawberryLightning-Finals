<!-- Authored by: Bayubay,Irish Erika L. -->
<?php
include 'process.php';
session_start();
$id=$_GET['cancelid'];

$sessionName = $_SESSION["username"];

$sql = "SELECT * FROM login WHERE username='$sessionName'";
$result = mysqli_query($conn, $sql);

/** **/
if($row = mysqli_fetch_assoc($result)) {
    $userid = $row["id"];


    $cancelsql="DELETE FROM `participants` WHERE event_id = $id AND participant_id = $userid";

    $result=mysqli_query($conn,$cancelsql);

/** This message will appear once the event is successfully deleted or otherwise if an error has occured.**/
    if($result){
        echo "deleted successfully";
    }else{
        die(mysqli_error($conn));
    }

    $logsql = "SELECT * FROM events WHERE id=$id";
    $result = mysqli_query($conn, $logsql);

/** To validate if the user's cancel activity is saved in the database **/
    if($row2 = mysqli_fetch_assoc($result)) {
        $eventName = $row2["eventName"];
        $activity = "Cancelled Event: {$eventName}!";

        $activitysql="INSERT INTO `activitylog` (useractivity, userid, eventid) VALUES('$activity', $userid, $id)";
        $result3=mysqli_query($conn, $activitysql);

/** This message will appear if the user activity is successful or otherwise if an error has occured **/
        if($result3){
            echo "Activity Cancelled!";
      }else{
            die(mysqli_error($conn));
      }
    }
}

?>
