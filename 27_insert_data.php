<?php  

$server_name =  "localhost";
$user_name = "root";
$password = "";
$database_name = "shari_phptut";


$conn =  mysqli_connect($server_name, $user_name, $password, $database_name);

if(!$conn){
    die("sorry  we  failed  the conntion ". mysqli_connect_error());
}else
{
    echo "Conntion  hass  inserted wass successfully ";
}








?>