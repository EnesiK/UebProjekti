<?php require '../businessLogic/databaseConfig.php';

$sql = "SELECT * FROM register_form";

$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 10px 21px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../views/dashboardContact.php">Contact</a>
  
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
    <div>
        <h1>users</h1>
        <table>
            <thead>
                <tr>
            <th>Id</th>
            
             <th>Name</th>
            <th>Surname</th>
             <th>Username</th>
             <th>Email</th>
              <th>Password</th>
              <th>Image</th>
            </tr>
</thead>
<tbody>
    <?php
    if($result->num_rows > 0){

        while ($row = $result->fetch_assoc()){
?>
    <tr>
    <th><?php echo $row['id'];?></th>
     <th><?php echo $row['name']; ?></th>
     <th><?php echo $row['surname']; ?></th>
     <th><?php echo $row['username']; ?></th>
     <th><?php echo $row['email']; ?></th>
    <th><?php echo $row['pass']; ?></th>
     <th><?php echo $row['image']; ?></th>
   <td><a href="../editDelete/editReg.php?id=<?php echo $row['id']; ?>">Edit</a><a href="../editDelete/deleteReg.php?id=<?php echo $row['id']; ?>">Delete</a>
</tr>
<?php
        }
    }
    ?>
</tbody>
</table>
</div>

</body>
</html>




