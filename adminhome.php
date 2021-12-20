<!-- Authored by: Matt Wilfred Cabunoc Salvador -->

<?php
include 'process.php';
session_start();

/** To assure that no one can go to the page without logging in**/
if(!isset($_SESSION["username"])){
    header("location:index.php");
}

/** The admin will input these needed information for the events to be created **/
if(isset($_POST['save'])){
    $name = $_POST['eventName'];
    $location = $_POST['eventLocation'];
    $startTime = $_POST['eventStartDate'];
    $newStartTime = date('Y-m-d\TH:i', strtotime($startTime));
    $endTime = $_POST['eventEndDate'];
    $newEndTime = date('Y-m-d\TH:i', strtotime($endTime));
    $facilitator = $_POST['eventFacilitator'];
    $status = $_POST['statusOptions'];

/** The information regarding the created event will now be saved to the database **/
    $sql="INSERT INTO `events` (eventName, eventLocation, eventStartDate, eventEndDate, eventFacilitator, eventStatus)
    values('$name', '$location', '$newStartTime', '$newEndTime', '$facilitator', '$status')";

    $result=mysqli_query($conn,$sql);

/** The data will be saved in the database and this message will appear if the event adding process is successful or otherwise if an error has occured  **/
    if($result){
        header('location:adminhome.php');
        echo "Event Added Successfully!";
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./assets/css/adminpage.css" />
        <title>Welcome Admin</title>
    </head>
    <body>

    <?php require_once 'process.php'; ?>
        <h1>Welcome to Admin Page</h1><?php echo $_SESSION["username"] ?>
        <a href="logout.php">Logout</a>

    <table class="table">
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
                <button><a href="editevent.php?editid='.$id.'">Edit</a></button>
                <button><a href="deleteevent.php?deleteid='.$id.'">Delete</a></button>
             </td>
           </tr>';
         }
      }
      ?>

  </tbody>
</table>

        <div id="eventcreation">

        <h4> Create an Event </h4>

            <form method="POST">
                <div class="divfield">
                    <div><label> Name of Event </label><sub>REQUIRED</sub></div>
                    <input type="text" name="eventName" placeholder="Enter Event Name" required/>
                </div>

                <div class="divfield">
                    <div><label>Start of Event </label><sub>REQUIRED</sub></div>
                    <input type="datetime-local" name="eventStartDate" value="2021-12-21T13:10"
                    min="2021-12-21T01:10" max="2099-06-14T00:00" require/>
                </div>

                <div class="divfield">
                    <div><label>End of Event </label><sub>REQUIRED</sub></div>
                    
                    <input type="datetime-local" name="eventEndDate" value="Enter End Time"
                    min="<?php echo $_POST['eventStartDate'] ?>" max="2099-06-14T00:00" required/>
                </div>

                <div class="divfield">
                    <div><label> Location: </label><sub>REQUIRED</sub></div>
                    <input type="text" name="eventLocation" placeholder="Enter Event Location" required/>
                </div>

                <div class="divfield">
                    <div><label> Facilitator: </label></div>
                    <input type="text" name="eventFacilitator" value="<?php echo $_SESSION["username"] ?>" readonly/>
                </div>

                <div class="divfield">
                    <div><label> Status: </label><sub>REQUIRED</sub></div>
                    <select name="statusOptions">
                      <option value="active">Active</option>
                      <option value="ongoing">Ongoing</option>
                      <option value="cancelled">Cancel</option>
                  </select>
                </div>

                <hr><br/><br/><br/>

                <div id="buttondiv">
                      <button type="submit" name="save">Save</button>
                </div>
            </form>
        </div>

    </body>
</html>
