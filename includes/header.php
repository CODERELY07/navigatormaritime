<?php
    require_once './connection/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigormaritime</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/general-style.css"> 
    <link rel="stylesheet" href="css/archieve.css"> 
</head>
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
                    <li><a href="#" class=" text-white">ABOUT</a></li>
                    <li><a href="#" class=" text-white">SCHEDULE & REGISTRATION</a></li>
                    <li><a href="#" class=" text-white">OUR CLIENTS</a></li>
                    <li><a href="#" class=" text-white">ACCREDIATION COURSE</a></li>
                    <li><a href="#" class=" text-white">CERTIFICATE VERIFICITION</a></li>
                    <li><a href="#" class=" text-white">COURSES</a></li>
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
                        <img class src="http://www.navigatormaritime.com/wp-content/uploads/2015/07/navigatorLogo.jpg" alt="Navigator Logo">
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
                        <li><a href="#" class="text-secondary">ABOUT</a></li>
                        <li><a href="#" class="text-secondary">SCHEDULE & REGISTRATION</a></li>
                        <li><a href="#" class="text-secondary">OUR CLIENTS</a></li>
                        <li><a href="#" class="text-secondary">ACCREDIATION COURSE</a></li>
                        <li><a href="#" class="text-secondary">CERTIFICATE VERIFICITION</a></li>
                        <li><a href="#" class="text-secondary">COURSES</a></li>
                        <li><a href="facilities.php" class="text-secondary">FACILITIES</a></li>
                        <li><a href="contact.php" class="text-secondary">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<body>
    
