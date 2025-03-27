
<?php

$a = 10;
$b = 15;
/// Aritmetiic opeartos 
echo $a + $b;
echo "<br>";
echo "The value a + b is equal to ". $a +  $b . "<br>" ;
echo "The value a - b is equal to ". $a -  $b . "<br>" ;
echo "The value a * b is equal to ". $a *  $b . "<br>" ;
echo "The value a / b is equal to ". $a /  $b . "<br>" ;
echo "The value a % b is equal to ". $a %  $b . "<br>" ;  // this is the modulas of operators
echo "The value a ** b is equal to ". $a **  $b . "<br>" ;  // this is the exposneitona operatores 


/// assingment operatores 

$c = 232;
echo "The value is " . $c;
/// agar main es ko  dobara say es main add kara chaota hun
echo "<br>";

$c += 21;
echo $c;

echo "<br>";
/// Assignment Operators 
echo "hello ";
$x = 4;
$y = 3;
echo " The value of $x is equal ot $y is " . var_dump($x == $y) ;
echo "<br>";
echo "The value of $x is equal ot $y is " . var_dump($x <= $y) ;
echo "<br>";
echo "The value of $x is equal ot $y is " . var_dump($x >= $y) ;
echo "<br>";


/// ab ahum logical operation ko perfomame kara guy 
echo "<br>";
 $m = true;
 $n = false;
 echo "For m and n The result is ";
 echo var_dump( $m and $n);
 echo "<br>";
 echo var_dump( $m or $n);






?>