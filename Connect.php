<?php

$server ='localhost';
$user ='root';
$pass ='';
$database = 'cv_generator'; 
$conn = new mysqli($server,$user,$pass,$database);
if($conn->connect_error){
    die("connection Problem".$conn->connect_error);

}

?>