<?php
require_once 'database.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour and Travels Booking System</title>
    <link rel="stylesheet" href="./assets/vendors/swiper/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <div class="cursor"></div>
    <div id="preloader">
        <div class="circle"></div>
        <div class="text">
            <span>T</span>
            <span>O</span>
            <span>U</span>
            <span>R</span>
            <span>T</span>
            <span>R</span>
            <span>A</span>
            <span>V</span>
            <span>E</span>
            <span>L</span>
            <span>S</span>
        </div>
    </div>
    <div class="site">
        <header class="site-header">
            <div class="container">
                <div class="header-wrapper">
                    <div class="header-logo">
                        <a href="#">
                            <img src="./assets/image/tour-travels-booking-logo.svg" alt="logo">
                        </a>
                    </div>
                    <div class="navbar-wrapper">
                        <div class="toggle-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <ul class="navbar">
                            <li>
                                <a class="nav-link active" href="#">Home</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Destinations</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <?php if (isset($_SESSION['fullname'])): ?>
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-primary dropdown-toggle" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?php echo htmlspecialchars($_SESSION['fullname']); ?>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="userMenu">
                                            <li><a class="dropdown-item" href="/logout.php">Logout</a></li>
                                        </ul>
                                    </div>
                                <?php else: ?>
                                    <a href="/login-page.php" class="btn btn-primary">Sign Up</a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>