<?php
include 'process.php';
session_start();
$sessionName = $_SESSION["username"];

/** To ensure that no one can go to the page without logging in**/
if(!isset($_SESSION["username"])){
    header("location:login
    .php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./assets/css/userpage.css" />
        <title>Cosplay Event</title>
    </head>
    <body>
      <div>
        <div id="header">
        <h1>Welcome User to Cosplays</h1><?php echo $_SESSION["username"] ?>
        <a href="logout.php">Logout</a>
      </div>

        <div id="table1">
        <table>
        <thead>
          <tr>
            <th scope="col">Event No.</th>
            <th scope="col">Event Name</th>
            <th scope="col">Venue</th>
            <th scope="col">Start Time</th>
            <th scope="col">End Time</th>
            <th scope="col">Facilitator</th>
            <th scope="col">Status</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>

        <tbody>
            <?php

            $eventTable="SELECT * FROM `events`";
            $result=mysqli_query($conn, $eventTable);
            if($result){
              while($row=mysqli_fetch_assoc($result)){
                  $id=$row['id'];
                  $name=$row['eventName'];
                  $location=$row['eventLocation'];
                  $startTime=$row['eventStartDate'];
                  $endTime=$row['eventEndDate'];
                  $facilitator=$row['eventFacilitator'];
                  $status=$row['eventStatus'];

                  echo '<tr>
                  <th scope="row">'.$id.'</th>
                  <td>'.$name.'</td>
                  <td>'.$location.'</td>
                  <td>'.$startTime.'</td>
                  <td>'.$endTime.'</td>
                  <td>'.$facilitator.'</td>
                  <td>'.$status.'</td>
                  <td>
                      <button><a href="joinevent.php?joinid='.$id.'">Join</a></button>
                      <button><a href="cancelevent.php?cancelid='.$id.'">Cancel</a></button>
                  </td>
                </tr>';
              }
            }
            ?>
        </tbody>
      </table>
    </div>

      <div id="table2">
      <h4> USER LOGS </h4>
      <table>
        <thead>
          <tr>
            <th scope="col">Activity ID</th>
            <th scope="col">Activity Log</th>
            <th scope="col">Done By</th>
            <th scope="col">Event ID</th>
          </tr>
        </thead>

        <tbody>
            <?php
            $sessionName = $_SESSION["username"];

            $sql = "SELECT * FROM login WHERE username='$sessionName'";
            $result = mysqli_query($conn, $sql);

            if($row = mysqli_fetch_assoc($result)) {
            $userid = $row["id"];
            $username = $row["username"];

            $eventTable="SELECT * FROM `activitylog` WHERE userid=$userid";
            $result=mysqli_query($conn, $eventTable);

            if($result){
              while($row=mysqli_fetch_assoc($result)){
                  $activityid=$row['activityid'];
                  $activity=$row['useractivity'];
                  $eventid=$row['eventid'];

                  echo '<tr>
                  <th scope="row">'.$activityid.'</th>
                  <td>'.$activity.'</td>
                  <td>'.$username.'</td>
                  <td>'.$eventid.'</td>
                </tr>';
              }
            }
          }
            ?>
        </tbody>
      </table>
    </div>
    </div>
    </body>
</html>
