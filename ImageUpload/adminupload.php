<?php 

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection, 'event_db');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <style type="text/css">
      .formdesign{
        width: 50%;
        margin: auto;
        padding: 20px 15px;
      }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="../home.php">Home</a>
        
        <a class="nav-link" href="../event new/users.php">Explore Our Events</a>
        
      </div>
    </div>
  </div>
</nav>



<div class="formdesign">
<form action="insertimage.php" method="POST" enctype="multipart/form-data">
  <div class="modal-body">
    <div class="form-group">
      <label>Name</label>
      <input type="text" name ="eventname" class="form-control" placeholder="Enter Event Name" required>
    </div>
    <div class="form-group">
      <label> Upload Image </label>
      <input type="file" name="image[]" multiple class="form-control">
    </div>
  </div>
  <div class="modal-footer">
    <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Close">
    <input type="submit" name="saveimage" class="btn btn-primary" value="Upload">
  </div>
</form>
    </div>




    <?php
  $query = "SELECT * FROM images";
  $query_run = mysqli_query($connection, $query);
  if(mysqli_num_rows($query_run)>0){
    while($fetch = mysqli_fetch_assoc($query_run)){
      ?>
      <img src="uploads/<?php echo $fetch['image']; ?>" width="300" height="300">
      <?php
    }
  }
?>





  


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>









</body>
</html>