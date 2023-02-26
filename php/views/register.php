<?php include '../components/headerR.php'?>

<?php
    require '../businessLogic/databaseConfig.php';
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['name'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);
        $surname    = stripslashes($_REQUEST['surname']);
        $surname    = mysqli_real_escape_string($con, $surname);
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $pass = stripslashes($_REQUEST['pass']);
        $pass = mysqli_real_escape_string($con, $pass);
        $image = stripslashes($_REQUEST['image']);
        $image = mysqli_real_escape_string($con, $image);
     
        $query    = "INSERT into `register_form` (name, surname, username, email, pass, image)
                     VALUES ('$name', '$surname', '$username', '$email', '" . md5($pass) . "',  '$image')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='../views/index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } 
    ?>
<div class="register">
        <form action="" method="POST">
                <div class="box">
                <p>Please fill in this form to create</p>
                <hr>
                <div class="boxC">
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" id="name" required>
                </div>
                <div class="boxC">
                <label for="Surname"><b>Surname</b></label>
                <input type="text" placeholder="Enter Surname" name="surname" id="surname" required>
                </div>
                <div class="boxC">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" id="username" required>
                </div>
                <div class="boxC">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>
                </div>
                <div class="boxC">
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" id="pass" required>
                </div>
                <div class="boxC">
                <label for="psw-repeat"><b>Repeat</b></label>
                <input type="password" placeholder="Repeat Password" name="passRepeat" id="passRepeat" required>
                </div>
                <div class="boxC">
                <label for="file"><b>Choose File</b></label>
                <input type="file" class="box" name="image" accept="image/jpeg, image/png">
                </div>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <input type="submit" name="submit" value="register now " class="btn"  onclick="validate()">
            </div>
        </form>
    </div>

    <?php include '../components/footerR.php'?>