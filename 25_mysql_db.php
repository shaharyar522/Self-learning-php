<?php

$server_name = "localhost";
$user_name = "root";
$password = "";

$conn =  mysqli_connect($server_name, $user_name, $password);

// creating  a connection 

if(!$conn){
    die("sorrry we   failed  to connected  ".mysqli_connect_error());

}else
{
    echo "Connection wass successfully ";
    
}



?>