<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="users.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <title>Event Section</title>
    <style>
        .form{
        width: 50%;
        margin: auto;
        padding: 20px 15px;
        }
    </style>
</head>
<body>


<section class="sub-header">
        <nav>
            <a href="home.php"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Events of IOPE</h1>
        <p>_______________________________________________________________________________________________________________________</p>
</section>    

<section class="event-body">
    <div class="form">
    <form action="searchevent.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        
        <div class="form-group">
            <label>Category</label>
            <select name="event_category" id="event_category" class="form-control" required>
                 <option value="Cultural">Cultural</option>
                <option value="Technical">Technical</option>
                <option value="Sports">Sports</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="searchevent" class="btn btn-primary">Search Data</button>
      </div>
      </form>
      </div>
    <div class="container py-5">
        <div class="row mt-4">
        <?php 
        
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, 'event_db');
        
        $query = "SELECT * FROM events ORDER BY id DESC";
        $query_run = mysqli_query($connection, $query);
        $check_event = mysqli_num_rows($query_run) > 0;
        
        if($check_event)
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
                ?>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <a href="../ImageUpload/userimage.php?event_name=<?php echo $row['event_name']; ?>"><img src="uploads/<?php echo $row['event_image']; ?>" width="415px" height="400px" alt="Event Images"></a>
                        <div class="card-body">
                            <a><h3 class="card-title"><?php echo $row['event_name'];?></h3></a>
                            <h4 class="card-title"><?php echo $row['department'];?></h4>
                            <h5 class="card-title"><?php echo $row['category'];?></h5>
                            <p class="card-title"><?php echo $row['event_date'];?></p>
                            <p class="card-text">
                            <?php echo substr($row['event_desc'], 0, 100) . '...'; ?>
                            </p>
                            
                        </div>
                    </div>
                </div>
                <?php
            }
        }
            else{
                echo "No Event Found";
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