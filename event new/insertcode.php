<?php 

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection, 'event_db');




if(isset($_POST['saveevent'])){

    $id= $_POST['id'];
    $name = $_POST['event_name'];
    $date = $_POST['event_date'];
    $category = $_POST['event_category'];
    $department = $_POST['department'];
    $description = $_POST['event_desc'];
    $images = $_FILES["event_image"]['name'];
    

    if(file_exists("uploads/" . $_FILES["event_image"]["name"])){
        $store = $_FILES["event_image"]["name"];
        $_SESSION['status']= "Image already exists. '.$store.'";
        header('Location: events.php');
    }
    else{
        $query="INSERT INTO events (`category`,`event_name`,`department`,`event_desc`,`event_image`,`event_date`) VALUES ('$category','$name','$department','$description','$images','$date')";
        $query_run = mysqli_query($connection, $query) > 0;

        if($query_run){
            move_uploaded_file($_FILES["event_image"]["tmp_name"], "uploads/".$_FILES["event_image"]["name"]);
            $_SESSION['success'] = "Event Added";
            header('Location: events.php');
        }
        else{
            $_SESSION['success'] = "Event Not Added";
            header('Location: events.php');
        }
    }

    
}
?>