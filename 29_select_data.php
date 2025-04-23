<?php

$conn = mysqli_connect("localhost", "root", "", "shari_phptut");

if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit(); // Optional: stops the script if the connection fails
}else
{
    echo "Connection  was successfully ";
}


$sql = "SELECT * FROM data_form";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

echo "$num";

?>

