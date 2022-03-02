<?php


//including connection
include 'Conf.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    

session_start();
//posting data form
 $name = $_POST['email'];
 $pass = $_POST['pass'];
 
 
 $_SESSION['user'] = $name;
 $result = $conn->query("SELECT COUNT(*) FROM Users WHERE Name='$name' AND Password='$pass'")->fetchColumn();
if ($result > 0){

    $_SESSION['name'] = $name;
    $_session['pass'] = $pass;
    header('REFRESH:1;URL=Home.php');
}
else{
echo '<script>alert("wrong user name or password")</script>';
   header('REFRESH:5;URL=../index.html');
}


    
}



else{
    echo "stfu";
}