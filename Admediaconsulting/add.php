<?php 
require_once "db_config.php";
$op = new operations;
$op->check();
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
        <h1>Create new user</h1>
<form  method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Phone</label>
    <input type="tel" name="phone" class="form-control">
  </div>
  <div class="mb-3">
  <label class="form-label">Day & time arrival</label>
  <input type="datetime-local" name="dt" class="form-control">
  </div>
  <div class="mb-3">
  <label class="form-label">group patch number</label>
  <input type="number" name="gpnumber" class="form-control">
  </div>
  <button name="add" type="submit" class="btn btn-primary">add</button>
</form>
</div>
</body>
</html>