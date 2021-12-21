<!-- Authored by: Bayubay,Irish Erika L. -->
<?php 
include 'process.php';
session_start();
$id=$_GET['joinid'];

$sessionName = $_SESSION["username"];

$sql = "SELECT * FROM login WHERE username='$sessionName'";
$result = mysqli_query($conn, $sql);

/** User inputs needed in joining an event**/
if($row = mysqli_fetch_assoc($result)) {
    $username = $row["username"];
    $userid = $row["id"];
    $fName = $row["firstName"];
    $surname = $row["surname"];


    $joinsql="INSERT INTO `participants` (event_id, participant_id) VALUES($id, $userid)";
    $result2=mysqli_query($conn,$joinsql);

/** This message will appear if the event joining process is successful or otherwise if an error has occured. **/
    if($result2){
        echo "Joined Event!";
    }else{
        die(mysqli_error($conn));
    }

    //logs

    $logsql = "SELECT * FROM events WHERE id=$id";
    $result = mysqli_query($conn, $logsql);

/** To validate if the user's joining process is saved in the database**/
    if($row2 = mysqli_fetch_assoc($result)) {
        $eventName = $row2["eventName"];
        $activity = "Joined Event: {$eventName}!";

        $activitysql="INSERT INTO `activitylog` (useractivity, userid, eventid) VALUES('$activity', $userid, $id)";
        $result3=mysqli_query($conn, $activitysql);

/** This message will appear if the user activity is successful or otherwise if an error has occured **/
        if($result3){
            echo "Activity Logged In!";
      }else{
            die(mysqli_error($conn));
      }
    }
}

?>
