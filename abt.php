<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOPE Diaries</title>
    <link rel="stylesheet" href="abt.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/de1910d810.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="home.php"><img src="images/finallogo.png"></a>
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
        <h1>About</h1>
    </section>


    <!-- ------------About us--------------- -->
    <div class="container">
        <div class="header">
            <h1>Our Team</h1>
        </div>
        <div class="sb-container">
        <div class="teams">
            <img src="images/sejal.png">
            <div class="name">Sejal Pawar</div>
            <div class="desig">Back-End & UI Developer</div>
            <div class="about">Leader of Team Codeholics and assigned with the work of all Back-End & UI Devleopment</div>
            <div class="phone">
                <p>Contact me 7755931589</p>
            </div>
            <div class="social-links">
                <a><i class="fa fa-facebook"></i></a>
                <a><i class="fa fa-twitter"></i></a>
                <a><i class="fa fa-instagram"></i></a>
                <a><i class="fa fa-linkedin"></i></a>
            </div>
        </div>

        <div class="teams">
            <img src="images/manish.png">
            <div class="name">Manish Jadhav</div>
            <div class="desig">Database Administrator</div>
            <div class="about">Member of Team Codeholics and assigned with the work of Database Administration</div>
            <div class="phone">
                <p>Contact me 9028992643</p>
            </div>
            <div class="social-links">
                <a><i class="fa fa-facebook"></i></a>
                <a><i class="fa fa-twitter"></i></a>
                <a><i class="fa fa-instagram"></i></a>
                <a><i class="fa fa-linkedin"></i></a>
            </div>
        </div>

        <div class="teams">
            <img src="images/shruti.png">
            <div class="name">Shruti Gurav</div>
            <div class="desig">Documentation</div>
            <div class="about">Member of Team Codeholics and assigned with the work of all Documentation</div>
            <div class="phone">
                <p>Contact me 8530037679</p>
            </div>
            <div class="social-links">
                <a><i class="fa fa-facebook"></i></a>
                <a><i class="fa fa-twitter"></i></a>
                <a><i class="fa fa-instagram"></i></a>
                <a><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        </div>
    </div>








  <!-- ------------Footer--------------------- -->
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
<p>Made with <i class="fa fa-heart-o"></i> by Team Codeholics</p>
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

