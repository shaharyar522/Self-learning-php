<!-- agar hum ny ksi variable ka data type ko mallom karana hian tu kasay karin guy  -->

<!-- \*
1.string
2.interger
3.float
4.boolean
5.object
6.Array
7.null
*/ -->

<?php
//1.combination of string
$name = "shari";
$frind = "islam";
echo "$name ka frind hain $frind";
?>
<br>

<?php
//2.no decimal number 
$income = 234;
$debt = -343;
echo $income;
echo $debt;
?>
<br>
<?php
//3float  decimal number.
$income = 234.34;
$debt = 34.2;
echo $income;
echo "<br>";
echo $debt;
?>
<br>



uay hamary pass bolean hian ";
<br>
<?php
//4.boolean.
$x = true;
$is_frind = false;
echo $x;
echo "<br>";
echo $is_frind;
?>
<br>
agar hum ny es ki type malom karni hu ot var_dump() ka use karay  getmyuid ";
<?php
$x = true;
$is_frind = false;
echo "<br>";
echo var_dump($x);
echo "<br>";
echo var_dump($is_frind);
?>
<br>

<!--  //4.object. object hamrya pass jasay kay  kay 
 e.g Employee is a class  and shari is a object  
 us main hamrya pass bho shari ka object main hnguy means age, color ,slarya etc
  -->

<br>
// uay hamray pass arrray ko descripbe kay hain 
<br>
<?php
//5.Arrry

$frind = array("shari","ali","wasem","garrii");
echo var_dump( $frind);
echo $frind[0];
echo "<br>";
echo $frind[1];
echo "<br>";
echo $frind[2];
echo "<br>";
echo  $frind[3];
echo "<br>";
echo  $frind[4];  // will thron an error 




?>

<br>
//null matlab k koe bhi value nhi 

<?php
$name = Null;
echo $name;
echo "<br>";
$name = Null;
echo var_dump($name);
?>

