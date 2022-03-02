<?php session_start();?>

<form method="GET" action="#">
    <input type="text" name="new" placeholder="edit">
    <input type="submit" value="edit">
</form>
<?php

include 'Conf.php';
$new = $_GET['new'];
$mewo = $_SESSION['post'];
echo $new;
echo $mewo;
$sql = "UPDATE `posts` SET post='$new' WHERE post='$mewo'";
  // use exec() because no results are returned
  $conn->exec($sql);
?>