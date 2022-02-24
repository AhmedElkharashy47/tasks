<?php
include 'Conf.php';
$name = $_POST['name'];
$usrname = $_POST['uname'];
$pass = $_POST['pass'];
$phonen = $_POST['phone'];
$mail = $_POST['email'];
class user{
    
    
    //properties
    public $uname;
    public $username;
    public $email;
    public $phone;
    public $password;
    
    //methods
    function setName($uname){
        $this->uname = $uname;
    }
    function setUname($username){
        $this->username = $username;
    }
    function setpass($password){
        $this->password = $password;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function setphone($phone){
        $this->phone = $phone;
    }
}
//creating user
$member = new user();
$member-> setName($name);
$member-> setUname($usrname);
$member-> setpass($pass);
$member->setEmail($mail);
$member->setphone($phonen);




 $sql = "INSERT INTO `Users`(Name, UserName, Password, Email, phone) VALUES ('$name','$usrname', '$pass', '$mail', '$phonen')";
  // use exec() because no results are returned
  $conn->exec($sql);
  ?>
  <!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Welcome!</div>
    <div class="content">
     <p>
         welcome !
     </p>
     <p>
         You can login now using your user and password 
     </p>
     <a href="../index.html">click here to login</a>
    </div>
  </div>

</body>
</html>