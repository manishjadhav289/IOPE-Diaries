<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOPE Diaries</title>
    <link rel="stylesheet" href="crs.css">
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
        <h1>Courses in IOPE</h1>
    </section>

<!-- ------Courses------------ -->
<section class="maincourse">
    <section class="course">
        <h1>Courses in IOPE </h1>

        <div class="row">
            <div class="course-col">
                <h3>Information Technology</h3>
                <p>To impart quality technical education to produce highly skilled technologist in the era of information technology and serve the society for helping the country to attain new height in Information Technology.</p>
            </div>
            <div class="course-col">
                <h3>Computer Engineering</h3>
                <p>To create persistently changing environment for the rural masses to make them state-of-the-art computer professionals for nation building and humanity at large.</p>
            </div>
            <div class="course-col">
                <h3>Electronics & Telecommunication Engineering</h3>
                <p>The Department pursue to facilitate contemporary technical education in the field of Electronics and Telecommunication engineering by imparting scientific temper in thestudents leading towards producing world class technicians, able to solve real life problems and foster a successful career.</p>
            </div>
        </div>
        <div class="row">
            <div class="course-col">
                <h3>Chemical Engineering</h3>
                <p>To create a department where we can imbibe curiosity to students who wish to become better technician and encourage the students who wish to become technologists.</p>
            </div>
            <div class="course-col">
                <h3>Electrical Engineering</h3>
                <p>The program in Electrical Engineering will provide programs of the highest quality to produce world class engineers who can address challenges of the Millennium. This department will endeavour to strengthen the facilities to provide solutions to relevant Electrical Engineering problems imparting the latest knowledge and skills to the undergraduates.</p>
            </div>
            <div class="course-col">
                <h3>PetroChemical Engineering</h3>
                <p>The vision of the Department of Petrochemical Engineering aims to be distinct locally, provincially and globally as a department that produces eminence Petrochemical Engineers capable to apply basic knowledge of Petrochemical and Chemical Engineering concepts.</p>
            </div>
        </div>
        <div class="row">
            <div class="course-col">
                <h3>Instrumentation Engineering</h3>
                <p>The aim of the department is to impart quality Diploma level education in Instrumentation Engineering to produce excellent technical manpower, motivated towards continuous learning.</p>
            </div>
            <div class="course-col">
                <h3>Plastic & Polymer Engineering</h3>
                <p>The department of Plastic & Polymer Engineering aspires to achieve excellence by imparting world class education and training to students to cater the growing needs of plastics, rubber industries, manufacturing and processing sector and research institutes.</p>
                </div>
                <div class="course-col">
                    <h3>Engineering Workshop</h3>
                    <p>Basic Engineering workshop curriculum is framed in all engineering/technology diploma programmes so as to make all the students proficient in the use of hand tools, equipments and machineries in various workshop sections.</p>
                    </div>
        </div>
    </section>
</section>

    
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