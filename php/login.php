<?php
//including connection
include 'Conf.php';

//posting data form
 $name = $_POST['email'];
 $pass = $_POST['pass'];
 
 $result = $conn->query("SELECT COUNT(*) FROM Users WHERE Name='$name' AND Password='$pass'")->fetchColumn();
if ($result > 0){
    include 'Home.php';
}
else
echo '<script>alert("wrong user name or password")</script>';