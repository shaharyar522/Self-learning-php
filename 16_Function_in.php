<?php
echo "Well_come to php Tutorial on funciotn ";

//A function is  a block of code that can be  use  can be used repeatedl in a program

function processMarks($marksArry)
{
    $sum = 0;
    foreach($marksArry as $value)
    {
        $sum += $value;
    }
    return $sum;
}
// main ek fucntion banaya hina jo kay ab jo behi number ko add karo ga 

// us ko wo sum kar kay value dain ga
// ahbi main ek function banay liaa hain

//now thi is the array 
$abdul = [23,45,67,89,10];
$summarks = processMarks($abdul);
echo "<br>";
echo "Total marks scored by rohan out of 600 is  $summarks";

echo "<br>";

$shari = [93,97,56,44,34];
$summarks_shari = processMarks($shari);

echo "Now shari is geeting a marsk totla this $summarks_shari"


// ab main ek our averg maks ka funcion bana o ga or us main 
// pahly fucntion ko call karo ga











?>
<br>
<!-- anohter examploe of avg marks studnet  -->
<?php

function avgmarks($avgnumber)
{
   
  $sum = 0;
  $i =1;
  foreach($avgnumber as $value){
    $sum += $value;
    $i++;
  }
  return $sum/$i;
}

$shari2 = [1,2,3,4,5];
$avg_number = avgmarks($shari2);
echo "The total avg of shari2 is $avg_number";

?>