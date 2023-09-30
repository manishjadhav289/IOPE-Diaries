<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'event_db');

if(isset($_POST['updateevent']))
{
    $id = $_POST['update_id'];
    $event_name = $_POST['event_name'];
    $date = $_POST['event_date'];
    $category = $_POST['event_category'];
    $department = $_POST['department'];
    $event_desc = $_POST['event_desc'];
    $event_image = $_FILES['event_image']['name'];

    $event_query = "SELECT * FROM events WHERE id='$id'";
    $event_query_run = mysqli_query($connection, $event_query);
    foreach($event_query_run as $fa_row){
        // echo $fa_row[$event_image];
        if($event_image == NULL)
        {
            $image_data = $fa_row[$event_image];
        }
        else{
            if($img_path = "uploads/".$fa_row[$event_image]){
                unlink($img_path);
                $image_data = $event_image;
            }
        }
    }

    $query = "UPDATE events SET category='$category', event_name='$event_name', department= '$department', event_desc='$event_desc', event_image= '$event_image', event_date='$date' WHERE id
    = '$id' ";
    $query_run=mysqli_query($connection, $query);

    if($query_run)
    {
        if($event_image == NULL){
        $_SESSION['succes'] = "Event Updated";
        header('Location: events.php');
    }
    else{
        move_uploaded_file($_FILES["event_image"]["tmp_name"], "uploads/".$_FILES["event_image"]["name"]);
        $_SESSION['status'] = "Event NOt Updated";
        header('Location: events.php');
    }
    
}
else{
    $_SESSION['status'] = "Event not uploaded";
    header('Location: events.php');
}
}

?>