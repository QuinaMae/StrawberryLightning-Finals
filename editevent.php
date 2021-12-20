<!-- Authored by: Santos, Christine Meg C. -->

<?php

include 'process.php';

$id=$_GET['editid'];
$sql="SELECT * FROM `events` WHERE id=$id";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

/** This will show as the current information of the event **/
$retrievedName=$row['eventName'];
$retrievedLocation=$row['eventLocation'];
$oldStartTime = $row['eventStartDate'];
$retrievedStartTime = date('Y-m-d\TH:i:s', strtotime($oldStartTime));
$oldEndTime = $row['eventStartDate'];
$retrievedEndTime = date('Y-m-d\TH:i:s', strtotime($oldEndTime));
$retrievedFacilitator = $row['eventFacilitator'];
$retrievedStatus = $row['eventStatus'];

/** This is the part where the admin will now input the updated information for the said event **/
if(isset($_POST['update'])){
    $name = $_POST['eventName'];
    $location = $_POST['eventLocation'];
    $startTime = $_POST['eventStartDate'];
    $newStartTime = date('Y-m-d\TH:i', strtotime($startTime));
    $endTime = $_POST['eventEndDate'];
    $newEndTime = date('Y-m-d\TH:i', strtotime($endTime));
    $facilitator = $_POST['eventFacilitator'];
    $status = $_POST['statusOptions'];

    $sql="UPDATE `events` SET eventName='$name', eventLocation='$location', eventStartDate='$newStartTime', eventEndDate='$newEndTime', eventFacilitator='$facilitator', eventStatus='$status' WHERE id=$id";

    $result=mysqli_query($conn,$sql);

/** The data will be saved and user will be redirected to the adminhome or otherwise if an error has occured  **/
    if($result){
        header('location:adminhome.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Admin</title>
    </head>
    <body>
        <h1>Welcome to Admin Page</h1>
        <a href="logout.php">Logout</a>

        <div>
            <form method="POST">
                <div>
                    <label>Name of Event: </label>
                    <input type="text" name="eventName" value="E<?php echo $retrievedName ?>">
                </div>

                <div>
                    <label>Start of Event </label>
                    <input type="datetime-local" name="eventStartDate" value="<?php echo $retrievedStartTime ?>"/>
                </div>

                <div>
                    <label>End of Event </label>
                    <input type="datetime-local" name="eventEndDate" value="<?php echo $retrievedEndTime ?>"/>
                </div>

                <div>
                    <label> Location: </label>
                    <input type="text" name="eventLocation" value="<?php echo $retrievedLocation ?>">
                </div>

                <div>
                    <label> Facilitator: </label>
                    <input type="text" name="eventFacilitator" value="<?php echo $retrievedFacilitator ?>">
                </div>

                <div>
                  <label> Status: </label>
                  <select name="statusOptions" value="<?php echo $retrievedStatus ?>">
                      <option value="active">Active</option>
                      <option value="ongoing">Ongoing</option>
                      <option value="cancelled">Cancel</option>
                  </select>
                </div>

                <div>
                    <button type="submit" name="update">Update</button>
                </div>
            </form>
        </div>

    </body>
</html>
