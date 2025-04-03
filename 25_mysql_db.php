<?php

$server_name = "localhost";
$user_name = "root";
$password = "";


// creating  a connection 
 
$conn =  mysqli_connect($server_name, $user_name, $password);

if(!$conn){
    die("sorrry we   failed  to connected  ".mysqli_connect_error());

}else
{
    echo "Connection wass successfully ";
    
}



?>