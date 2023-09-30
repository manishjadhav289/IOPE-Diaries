<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOPE Diaries</title>
    <link rel="stylesheet" href="contact.css">
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
            <a href="home.php"><img src="images/logo.png"></a>
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
        <h1>Contact Us</h1>
    </section>

    <!----------Contact Us ----- -->
<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d90365.76511111319!2d73.28967317690348!3d18.09903946786102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be82e84d9304431%3A0x2b2afa8c5e85dec9!2sInstitute%20of%20Petrochemical%20Engineering!5e0!3m2!1sen!2sin!4v1682503710806!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
    <div>
        <i class="fa fa-home"></i>
        <span>
            <h5>IOPE,Vidyavihar, Waghose</h5>
            <p>Lonere,Raigad,402104</p>
        </span>
        </div>
    
    <div>
        <i class="fa fa-phone"></i>
        <span>
            <h5>02140-275103</h5>
            <p>Monday to Saturday: 9.30 AM to 5.30 PM [2nd & 4th Saturday Holiday] </p>
        </span>
    </div>
    <div>
    <i class="fa fa-envelope-o"></i>
        <span>
            <h5>iopelonere@rediffmail.com</h5>
            <p> Email us your query</p>
        </span>
    </div>
    </div>  
    
        
    </div>
    
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