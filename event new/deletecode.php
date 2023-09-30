<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'event_db');

if(isset($_POST['deleteevent']))
{
$id = $_POST['delete_id'];

$query = "DELETE FROM events WHERE id='$id'";
$query_run = mysqli_query($connection, $query);

if($query_run){
    echo '<script> alert("Data Deleted");</script>';
    header("Location: events.php");
}
else
{
    echo '<script> alert("Data Not Deleted"); </script>';
}
}
?>