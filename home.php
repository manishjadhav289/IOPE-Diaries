
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOPE Diaries</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="home.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <script src="https://kit.fontawesome.com/de1910d810.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

    <style>
    .white-text {
        color: white;
    }
</style>

</head>
<body>
    <section class="header">
        
        <video autoplay loop muted plays-inline class="back-video">
            <source src="images/vid5.mp4" type="video/mp4">
        </video>
        <nav>
            <a href=""><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="crs.php">Course</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="content">
            <h1>IOPE Diaries</h1>
            <a href="event new/users.php">Explore our Events</a>
        </div>
    </section>

    <div class="container">
    <section class="campus">
        <div class="event">
    <h1>Our Events</h1>
        <p>To View current Events as a historian is to account for all perspectives, even those of your enemy.</p>
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
            $i=0;
            while($row = mysqli_fetch_assoc($query_run))
            {
                ?>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <a href="ImageUpload/userimage.php?event_name=<?php echo $row['event_name']; ?>">
                            <img src="event new/uploads/<?php echo $row['event_image']; ?>" width="415px" height="400px" alt="Event Images">
                        </a>
                        <h3 class="card-title white-text"><?php echo $row['event_name']; ?></h3>
                        
                    </div>
                </div>
                <?php
                $i++;
                if ($i == 3)
                {
                    break;
                }
            }
        }
            else{
                echo "No Event Found";
            }
            ?>

            
        </div>
    </div>
    
     </section>
     </div>

     <!-- -------campus------- -->
     <div class="container">
     <section class="campus">
        <h1>Our Global Campus</h1>
        <p>The place where all the memories created in IOPE, Lonere are stored.</p>
        <div class="row">
            <div class="campus-col">
                <img src="images/campus1.jpg">
                <div class="layer">
                    <h3>Workout Area</h3>
                </div>
            </div>
        
        <div class="campus-col">
            <img src="images/campus2.jpg">
            <div class="layer">
                <h3>DBATU Campus</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="images/campus3.jpg">
            <div class="layer">
                <h3>Main Entrance</h3>
            </div>
        </div>
        </div>
     </section>
     </div>


<!-- --------------------About------------------>
<div class="abt">
    <h1>Click Here To Know<br> About Our Developers</h1>
    <a href="abt.php" class="hero-btn">Click Here</a>
</div>



<!-- --------------------footer------------------>
<section class="footer">
    <h4>About Us</h4>
    <p>This website provides you with the photos of events conducted in IOPE,Lonere
    </p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
<p>Made with<i class="fa fa-heart-o"></i> by Team Codeholics</p>
</section>

    <!----------JavaScript for Toggle Menu ----- -->
<script>

var navLinks = document.getElementById("navLinks");
function showMenu(){
    navLinks.style.right="0";
}
function hideMenu(){
    navLinks.style.right="-200px";
}

</script>

</body>
</html>


