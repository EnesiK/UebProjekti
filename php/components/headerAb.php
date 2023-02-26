<?php
$emri = "AboutUs";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $emri;?></title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!--font awsome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--scc link-->
    <link rel="stylesheet" href="../style/aboutUs.css">

</head>
<body>
    <!--header section start-->
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>
        <a href="#" class="logo"><span>T</span>ravel</a>
        <nav class="navbar">
            <a href="../views/index.php">home</a>
            <a href="../views/gallery.php">gallery</a>
            <a href="../views/aboutUs.php">AboutUs</a>
            <a href="../views/thingsToDo.php">ThingsToDo</a>
            <a href="#review">review</a>
            <a href="../views/contact.php">contact</a>
        </nav>
        
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>
        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>
      <!--header section ends-->

<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input id="email" type="text" class="box" name="email" placeholder="Enter Email">
        <input id="password" type="password" class="box" name="password" placeholder="enter your password">
        <input type="submit" value="login now " class="btn"  onclick="validate()">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="../views/register.php">register now</a></p>
    </form>

</div>


<!-- header section ends -->

<div class="heading1" style="background:url(../images/header-bg-1.png) no-repeat">
   <h1>about us</h1>
</div>