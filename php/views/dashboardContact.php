<?php require '../businessLogic/databaseConfig.php';

$sql = "SELECT * FROM contact_form";

$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    <div>
        <table>
            <thead>
                <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Subject</th>
            <th>Message</th>
            </tr>
</thead>
<tbody>
    <?php
    if($result->num_rows > 0){

        while ($row = $result->fetch_assoc()){
?>
    <tr>
    <<th><?php echo $row['id'];?></th>
    <th><?php echo $row['name']; ?></th>
    <th><?php echo $row['email']; ?></th>
    <th><?php echo $row['number']; ?></th>
    <th><?php echo $row['subject']; ?></th>
    <th><?php echo $row['message']; ?></th>
    <td><a href="../editDelete/deleteCon.php?id=<?php echo $row['id']; ?>">Delete</a>
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