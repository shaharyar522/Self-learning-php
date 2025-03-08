<?php
echo "Well come to Associative Arrays in php";


// There is index Associative arrray in php


// $arr = array('zero', 'one','two');
// echo "<br>";
// echo $arr[0];
// echo "<br>";
// echo $arr[1];
// echo "<br>";
// echo $arr[2];

// es main accociatin array ko add kya hain 

// matlba shari => ko hum ny bs computer science dia hain mtlb asscocitated array dia hian 
// $class = array ('shari' => 'Bs computer science', 'ali' => '11th class' , 'hamza' => 'prep' , 12 => 'this is string 12 class' );

// echo "<br>";

// echo $class['shari'];

// echo "<br>";

// echo $class['ali'];

// echo "<br>";

// echo $class['12']


// uay hamray pass dosray arry hian 

echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";

$class = array('shari' => 'BS computer Science' , 'ali' => '12 class' , 'hamza'=> 'zero class');

//            as Shari => Bs Computer Science
foreach ($class as $key => $value){
    echo  "<br> There is multiple student which  is the  $key in reading this class $value ";
}



//Accosiative Arrry main hum apni array ki kud value ko set kar sakty ina 



?>