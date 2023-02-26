<?php include '../components/headerI.php'?>

<section class="home" id="home">
        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>discover new places with us, adventure awaits</p>
            <a href="#" class="btn">discover more</a>
        </div>
        <div class="controls">
            <span class="vid-btn active" data-src="../images/vid-1.mp4"></span>
            <span class="vid-btn" data-src="../images/vid-2.mp4"></span>
            <span class="vid-btn" data-src="../images/vid-3.mp4"></span>
            <span class="vid-btn" data-src="../images/vid-4.mp4"></span>
            <span class="vid-btn" data-src="../images/vid-5.mp4"></span>
        </div>
        <div class="video-container">
            <video src="../images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>
    </section>
   
     <!--home section ends-->
     <!--book section starts-->
     <section class="book" id="book">
         <h1 class="heading">
             <span>b</span>
             <span>o</span>
             <span>o</span>
             <span>k</span>
             <span class="space"></span>
             <span>n</span>
             <span>o</span>
             <span>w</span>
         </h1>
<div class="row">
    <div class="image">
        <img src="../images/book-img.svg" alt="">
    </div>
   <?php
   require '../businessLogic/databaseConfig.php';
   if(isset($_REQUEST['placeName'])){
       $placeName = stripslashes($_REQUEST['placeName']);
      //$dateA = mysqli_real_escape_string($con, $dateA);
       $dateA = stripslashes($_REQUEST['dateA']);
      // $dateL = mysqli_real_escape_string($con, $dateL);
       $dateL = stripslashes($_REQUEST['dateL']);

       $query = "INSERT into `book_form` (placeName, dateA, dateL)
       VALUES ('$placeName', '$dateA', '$dateL')";
       $result = mysqli_query($con, $query);
       if($result){
        echo "<div class='form'>
        <h3>You booked successfully.</h3><br/>
        </div>";
} else {
  echo "<div class='form'>
        <h3>Required fields are missing.</h3><br/>
        </div>";
       }

   }
   ?> 
    <form action="" method="">
        <div class="inputBox">
            <h3>where to</h3>
            <input type="text" placeholder="place name" name="placeName">
        </div>
        <div class="inputBox">
            <h3>arrivals</h3>
            <input type="date" name="dateA">
        </div>
        <div class="inputBox">
            <h3>leaving</h3>
            <input type="date" name="dateL">
        </div>
        <input type="submit" class="btn" value="book now">
    </form>
</div>
     </section>
     <!--book section ends-->
     <!--packages section start-->
     <section class="packages" id="paskages">
         <h1 class="heading">
             <span>p</span>
             <span>a</span>
             <span>c</span>
             <span>k</span>
             <span>a</span>
             <span>g</span>
             <span>e</span>
             <span>s</span>
         </h1>
         <div class="box-container">
             <div class="box">
                 <img src="../images/p-1.jpg" alt="">
                 <div class="content">
                     <h3> <i class="fas fa-map-marker-alt"></i>mumbai</h3>
                     <p>Lorem ipsum dolor sit amet consectur adipisicing elit. Veritatis, nam!</p>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     </div>
                     <div class="price"> $90.00 <span>$120.00</span></div>
                     <a href="#" class="btn">book now</a>
                 </div>
             </div>
             <div class="box">
                <img src="../images/p-2.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i>hawai</h3>
                    <p>Lorem ipsum dolor sit amet consectur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="../images/p-3.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i>sidney</h3>
                    <p>Lorem ipsum dolor sit amet consectur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="../images/p-4.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i>paris</h3>
                    <p>Lorem ipsum dolor sit amet consectur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="../images/p-5.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i>tokoy</h3>
                    <p>Lorem ipsum dolor sit amet consectur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="../images/p-6.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i>egypt</h3>
                    <p>Lorem ipsum dolor sit amet consectur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>
         </div>
     </section>
     <!--packages section ends-->
     <section class="services" id="services">
         <h1 class="heading">
             <span>s</span>
             <span>e</span>
             <span>r</span>
             <span>v</span>
             <span>i</span>
             <span>c</span>
             <span>e</span>
             <span>s</span>
         </h1>
         <div class="box-container">
             <div class="box">
                 <i class="fas fa-hotel"></i>
                 <h3>afforadable hotels</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Adipisci delectus, nihil temporibus ducimus animi?</p>
             </div>
             <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drink</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Adipisci delectus, nihil temporibus ducimus animi?</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Adipisci delectus, nihil temporibus ducimus animi?</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Adipisci delectus, nihil temporibus ducimus animi?</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Adipisci delectus, nihil temporibus ducimus animi?</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Adipisci delectus, nihil temporibus ducimus animi?</p>
            </div>

         </div>
     </section>
     <!--services section ends-->
     <!--review section start-->
     <section class="review" id="review">
         <h1 class="heading">
             <span>r</span>
             <span>e</span>
             <span>v</span>
             <span>i</span>
             <span>e</span>
             <span>w</span>
         </h1>
         <div class="swiper-container review-slider">
             <div class="swiper-wrapper">
                 <div class="swiper-slide">
                     <div class="box">
                         <img src="../images/pic1.png" alt="">
                         <h3>Ebsare Kadiri</h3>
                         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non saepe, corrupti impedit exercitationem aut eos rem accusantium
                     dignissimos? Quia aut ullam nulla similique dolores, aspernatur nobis saepe eligendi. Aspernatur, neque.</p>
                            <div class="starts">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>

                     </div>
                 </div>
                 <div class="swiper-slide">
                    <div class="box">
                        <img src="../images/pic2.png" alt="">
                        <h3>Ramiz Hoxha</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non saepe, corrupti impedit exercitationem aut eos rem accusantium
                    dignissimos? Quia aut ullam nulla similique dolores, aspernatur nobis saepe eligendi. Aspernatur, neque.</p>
                           <div class="starts">
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="far fa-star"></i>
                           </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="../images/pic3.png" alt="">
                        <h3>Rumejsa Kadiri</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non saepe, corrupti impedit exercitationem aut eos rem accusantium
                    dignissimos? Quia aut ullam nulla similique dolores, aspernatur nobis saepe eligendi. Aspernatur, neque.</p>
                           <div class="starts">
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="far fa-star"></i>
                           </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="../images/pic4.png" alt="">
                        <h3>Filan Fisteku</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non saepe, corrupti impedit exercitationem aut eos rem accusantium
                    dignissimos? Quia aut ullam nulla similique dolores, aspernatur nobis saepe eligendi. Aspernatur, neque.</p>
                           <div class="starts">
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="fas fa-star"></i>
                               <i class="far fa-star"></i>
                           </div>
                    </div>
                </div>
             </div>
         </div>
     </section>
     <!--review section ends-->
     <!--brand section start-->
     <section class="brand-container">
         <div class="swiper-container brand-slider">
             <div class="swiper-wrapper">
                 <div class="swiper-slide"> <img src="../images/1.jpg" alt=""></div>
                 <div class="swiper-slide"> <img src="../images/2.jpg" alt=""></div>
                 <div class="swiper-slide"> <img src="../images/3.jpg" alt=""></div>
                 <div class="swiper-slide"> <img src="../images/4.jpg" alt=""></div>
                 <div class="swiper-slide"> <img src="../images/5.jpg" alt=""></div>
                 <div class="swiper-slide"> <img src="../images/6.jpg" alt=""></div>
             </div>
         </div>
     </section>
       <!--brand section ends-->

       <?php include '../components/footerI.php'?>