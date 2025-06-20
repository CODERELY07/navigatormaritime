<?php
    require_once './connection/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigormaritime</title>
    <!-- Carousel -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>
    <!-- for media player -->
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
	<link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <!-- bootrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- using php ehco time force css to load -->
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/contact.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/general-style.css?v=<?php echo time(); ?>"> 
    <link rel="stylesheet" href="css/archieve.css?v=<?php echo time(); ?>"> 
</head>
<!-- Mobile Menu -->
 <!-- TODO: FIX THE FONT_SIZE AND HEIGHT, MARGIN AND PADDING -->
    <div id="menu" class="fixed-top mobile-menu-block main-color">
        <div id="bar" class="float-end text-white fs-5 pb-2 pt-1">MENU<i class="fa-solid pb-1 fa-bars mx-2"></i></div><br>
        <div class="mobile-menu ">
                <div class="mobile-socials mb-2 d-flex justify-content-center gap-5">
                    <div class="mobile-social">
                        <a href="#">
                            <i class="fa-brands fa-facebook-f text-white"></i>
                            <span class="text-white">LIKE US</span>
                        </a>
                    </div>
                    <div class="mobile-social">
                        <a href="#">
                            <i class="fa-brands fa-twitter text-white"></i>
                            <span class="text-white">FOLLOW US</span>
                        </a>
                    </div>
                </div>
                <ul class="">
                    <li><a href="index.php" class=" text-white">HOME</a></li>
                    <li><a href="about.php" class=" text-white">ABOUT</a></li>
                    <!-- <li><a href="#" class=" text-white">SCHEDULE & REGISTRATION</a></li>
                    <li><a href="#" class=" text-white">OUR CLIENTS</a></li>
                    <li><a href="#" class=" text-white">ACCREDIATION COURSE</a></li> -->
                    <li><a href="certificate-verification.php" class=" text-white">CERTIFICATE VERIFICITION</a></li>
                    
                    <li class="dropdown"> 
                         <a href="#" id="course" class="text-white">COURSES</a>
                
                        <div id="myDropdown" class="dropdown-content">
                            <!-- TODO: FIX -->
                            <a href="house-courses.php" class="each-dropdown">IN HOUSE COURSES</a>
                            <a href="marina-courses.php" class="each-dropdown">MARINA COURSES</a>
                            <a href="practical-assesment.php" class="each-dropdown">PRACTICAL ASSESMENT</a>
                            <a href="electrical-courses.php" class="each-dropdown">ELECTRICAL COURSES</a>
                            <a href="#" class="each-dropdown">SPECIAL COURSE</a>
                        </div>
                    </li>
                    <li><a href="facilities.php" class=" text-white">FACILITIES</a></li>
                    <li><a href="contact.php" class=" text-white">CONTACT US</a></li>
                </ul>
        </div>
    </div>
    <header>
        <nav>
            <div class="flex header container">
                <div class="logo">
                    <a href="">
                        <img class src="./assets/img/navigatorLogo.jpg" alt="Navigator Logo">
                    </a>
                </div>
                <div class="navagation">
                    <div class="socials justify-flex-end flex">
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                                <span>LIKE US</span>
                            </a>
                        </div>
                        <div class="social">
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                                <span>FOLLOW US</span>
                            </a>
                        </div>
                    </div>
                    <ul class="justify-flex-end flex flex-wrap menu">
                        <li><a href="index.php" class="text-secondary">HOME</a></li>
                        <li><a href="about.php" class="text-secondary">ABOUT</a></li>
                        <!-- <li><a href="#" class="text-secondary">SCHEDULE & REGISTRATION</a></li>
                        <li><a href="#" class="text-secondary">OUR CLIENTS</a></li>
                        <li><a href="#" class="text-secondary">ACCREDIATION</a></li> -->
                        <li><a href="certificate-verification.php" class="text-secondary">CERTIFICATE VERIFICITION</a></li>
                        <li id="course-hover"> 
                            <a href="#" class="text-secondary">COURSES</a>
                            <div class="dropdown-hover dark-button">
                                <!-- TODO: FIX -->
                                <a href="house-courses.php">IN HOUSE COURSES</a>
                                <a href="marina-courses.php">MARINA COURSES</a>
                                <a href="practical-assesment.php">PRACTICAL ASSESMENT</a>
                                <a href="electrical-courses.php">ELECTRICAL COURSES</a>
                                <a href="#">SPECIAL COURSE</a>
                            </div>
                        </li>
                        <li><a href="facilities.php" class="text-secondary">FACILITIES</a></li>
                        <li><a href="contact.php" class="text-secondary">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<body>
    
