<?php 
require_once "db_config.php";
$op = new operations;
$result=$op->display();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hr_Managment_System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Hr Managment system</h1>
    <a class="btn btn-primary" href="add.php">Add</a>
    <br/><br/>

    <table class="table table-dark table-striped">
    <thead>
    
    
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Date & time arrival</th>
      <th scope="col">group patch number</th>
      <th scope="col">Edit</th>
      <th scope="col">DELETE</th>

    </tr>
    </thead>
     
    <?php /* displaying data from database*/while($row=mysqli_fetch_array($result)){ ?>   
  <tbody>
  <tr>
  <td><?php echo $row["id"] ?></td>
  <td><?php echo $row["name"] ?></td>
  <td><?php echo $row["phone"] ?></td>
  <td><?php echo $row["dt"] ?></td>
  <td><?php echo $row["gpnumber"] ?></td>
  <td><a class="btn btn-success" href="edit.php?id=<?php echo $row['id']  ?>">Edit</a></td>
  <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']  ?>">Delete</a></td>
  </tr>
  <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>