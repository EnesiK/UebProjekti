<?php
$emri = "TourTravel";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $emri; ?></title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!--font awsome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--scc link-->
    <link rel="stylesheet" href="../style/styleHome.css">

</head>
<body>
    <div class="container">
        <div class="content">
    <h3>hi, <span>admin</span><h3>
        <h1>welcome <span></span></h1>
        <p>this is an admin page</p>
 
      <?php
            session_start();
            if(isset($_SESSION['role']) && $_SESSION['role']==1){
                ?>
                <a href="../views/dashboard.php" class="btn">dashboard</a>
                <?php
            }
            ?>
            <?php
            if(isset($_SESSION['role'])){
                ?>
                <a href="../businessLogic/logout.php" class="btn">Logout</a>
                <?php
            }
            ?>
  </div>
  </div>
      <!--header section ends-->
   
     








