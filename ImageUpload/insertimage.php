<?php 

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection, 'event_db');

if(isset($_POST['saveimage'])){
    $id= $_POST['id'];
    $name = $_POST['eventname'];
    $images = $_FILES["image"];
  
    $countfiles = count($images['name']);
  
    for ($i = 0; $i < $countfiles; $i++) {
      $image_name = $images['name'][$i];
      $tmp_name = $images['tmp_name'][$i];
  
      if(file_exists("uploads/" . $image_name)){
        $_SESSION['status'] = "Image already exists: $image_name";
      }
      else{
        $query = "INSERT INTO images (`eventname`,`image`) VALUES ('$name','$image_name')";
        $query_run = mysqli_query($connection, $query);
  
        if($query_run){
          move_uploaded_file($tmp_name, "uploads/$image_name");
          $_SESSION['success'] = "Image Added";
        }
        else{
          $_SESSION['success'] = "Image Not Added";
        }
      }
    }
    header('Location: adminupload.php');
  }
?>