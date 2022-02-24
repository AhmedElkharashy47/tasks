<?php
$dsn = 'mysql:host=localhost;dbname=id18453670_task';
$user = 'id18453670_root';
$password = 'z*LB9|i!@~$^7@+d';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );
try{
    $conn = new PDO($dsn,$user,$password,$option);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  
   
}

catch(PDOException $e){
    echo "failed".$e->getMessage();
}