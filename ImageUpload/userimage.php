<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="users.css" rel="stylesheet">
    <link href="userimage.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <title>Event Section</title>
</head>
<body>

<section class="bg">

    <div class="container py-5">
        <div class="row mt-4">
        <?php 


if(isset($_GET['event_name'])) {
    $event_name = $_GET['event_name'];

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'event_db');

    $desc_query = "SELECT * FROM events WHERE event_name = '$event_name'";
    $desc_query_run = mysqli_query($connection, $desc_query);
    $check_desc_event = mysqli_num_rows($desc_query_run) > 0;
    $desc_row = mysqli_fetch_assoc($desc_query_run);
    echo $desc_row['event_desc'];
    
    $query = "SELECT * FROM images WHERE eventname = '$event_name'";
    $query_run = mysqli_query($connection, $query);
    $check_event = mysqli_num_rows($query_run) > 0;

    if($check_event)
    {
        while($row = mysqli_fetch_assoc($query_run))
        {
            ?>
    <div class="col-md-4 mt-5">
        <div class="card">
        <img src="uploads/<?php echo $row['image']; ?>" width="415px" height="400px" alt="Event Images">
        
        </div>
    </div>
            <?php
            
        }
    }
    else{
        echo "No Event Found";
    }
}



           
            ?>

            
        </div>
    </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>