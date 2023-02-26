<?php
require '../businessLogic/databaseConfig.php'; 
if(isset($_GET['id'])){
    $user_id=$_GET['id'];

    $sql = "DELETE FROM `contact_form` WHERE `id` = '$user_id'";

    $result = $con->query($sql);
    if($result == TRUE){
        echo "Deleted successfully.";
    }
    else{
        echo "Error:" . $sql . "<br>" . $con->error;
    }
}

?>