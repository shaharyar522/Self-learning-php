<?php

// uay hamray pass connection hain mysql main jo kay hum use karay guy 

echo "Well come to  the  stage  where we are  ready  to get  connected  to database <br> ";


// ways to connected to database 
// 1.mysqli  extention 
// 2. PDO

//connected to a database 

$servername = "localhost";
$username  = "root";
$password = "";
$databasename = "";




$conn  = mysqli_connect($servername, $username, $password,$databasename);

if(!$conn){
   die("Sorry Your database is not connected : ".mysqli_connect_error());
}





?>