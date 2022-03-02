<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/settings.css">
    <title>Hello, world!</title>
  </head>
  <body>
      
      
      
      
<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">

    settings
  </a>
</nav>

<div class="container">
<form action="#" method="post">
    <h2>change name?</h2>
  <div class="form-group">
    <label for="formGroupExampleInput">your name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="oldName">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">your new name</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="newName">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
<form action="#" method="post">
    <h2>change password?</h2>
  <div class="form-group">
    <label for="formGroupExampleInput">your password</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="oldPass">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">your new password</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="newPass">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
</div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
include 'Conf.php';

$user = $_POST['oldName'];
$new = $_POST['newName'];

$sql = "UPDATE `Users` SET Name='$new' WHERE Name='$user'";
  // use exec() because no results are returned
  $conn->exec($sql);
  
$pass = $_POST['oldPass'];
$newPass = $_POST['newPass'];

$sql = "UPDATE `Users` SET Password='$newPass' WHERE Password='$pass'";
  // use exec() because no results are returned
  $conn->exec($sql);

  

?>