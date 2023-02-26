<?php
require '../businessLogic/databaseConfig.php';

if(isset($_POST['update'])){
    
            $name = $_POST['name'];
            $user_id = $_POST['user_id'];
            $surname = $_POST['surname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $image = $_POST['image'];
           

            $sql = "UPDATE `register_form` SET `name`='$name',`surname`='$surname',`username`='$username',`email`='$email',`pass`='$pass',`image`='$image' WHERE `id`= '$user_id'";

            $result=$con->query($sql);
            if($result == TRUE){
                echo "Updated successfully.";
            }
            else{
                echo "Error" . $sql . "<br>" . $con->error;
            }
            
}
if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM `register_form` WHERE  `id`= '$user_id'";

    $result = $con->query($sql);
    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            $name = $row['name'];
            $surname = $row['surname'];
            $username = $row['username'];
            $email = $row['email'];
            $pass = $row['pass'];
            $image = $row['image'];
            $id = $row['id'];
        }
        ?>
        <h2>User Update form</h2>
        <form action="" method="post">
            <fieldset>
                <legend>Update info</legend>
                Name: <br>
                <input type="text" name="name" value="<?php echo $name;?>">
                <input type="text" name = "user_id" value = "<?php echo $id;?>">
                <br>
                Surname: <br>
                <input type="text" name="surname" value="<?php echo $surname;?>">
                <br>
                Username: <br>
                <input type="text" name="username" value="<?php echo $username;?>">
                <br>
                Email:<br>
                <input type="text" name="email" value="<?php echo $email;?>">
                <br>
                Password:<br>
                <input type="password" name="pass" value="<?php echo $pass;?>">
                <br>
                Image: <br>
                <input type="text" name="image" value="<?php echo $image;?>">
                <br><br>
                <input type="submit" name="update" value="update">
    
  <?php  }else{
        header('Location: ../views/home.php');
    }
}
?>