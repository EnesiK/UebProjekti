<?php include '../components/headerC.php';

if (isset($_POST["contactBtn"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = $email;
    $subject = $message;

    $message = "number: {$number}" . $message;

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: <kadiriebsare@gmail.com>';

    $mail = mail($to, $subject, $message, $headers);


    if($mail){
        echo "<script>alert('Mail Send.');</script>";
    }else{
        echo "<script>alert('Mail Note Send.');</script>";
    }
}
?>

<?php
    require '../businessLogic/databaseConfig.php';
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['name'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $number = stripslashes($_REQUEST['number']);
        $number = mysqli_real_escape_string($con, $number);
        $subject = stripslashes($_REQUEST['subject']);
        $subject = mysqli_real_escape_string($con, $subject);
        $message = stripslashes($_REQUEST['message']);
        $message = mysqli_real_escape_string($con, $message);
        
        
     
        $query    = "INSERT into `contact_form` (name, email, number, subject, message)
                     VALUES ('$name', '$email', '$number', '$subject',   '$message')";
        $result   = mysqli_query($con, $query);
      /*  if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='../views/index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }*/
    } 
    ?>

<!--contact section start-->
<div class="box-map">
<iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23571.264620879025!2d20.633053857230227!3d42.39775461022097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1353a3ba2f86a9a3%3A0x3a75ac91014b3bdd!2sRahovec!5e0!3m2!1sen!2s!4v1639535929213!5m2!1sen!2s"
 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="../images/contact-img.svg" alt="">
        </div>
        <form action="" method="POST">
            <div class="inputBox">
                <input type="text" name="name"  placeholder="name">
                <input type="email" name="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="tel" name="number" placeholder="number">
                <input type="text" name ="subject" placeholder="subject">
            </div>
            <textarea placeholder="message" name="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" name="contactBtn" value="send message">
        </form>

    </div>
    
</section>

<!-- contact section ends -->

<?php include '../components/footerC.php'?>