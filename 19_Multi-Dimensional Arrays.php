<?php
echo "Well come  to Multi - Dimensional Array in php <br> ";

//basically thiis is multi dimensional arrry a one arrray in multiple array




$multiDim = array(
  array('shair','alie','hamza','yasir'),
  array('fahad','nomi','zain','shobi'),
  array('wasemm','alikhan','hadi'));
  
// echo var_dump($multiDim);
// echo $multiDim[2][2];

// now Printing  the  contenct of 2 dinmention arry 
// uay maray pass multi dimentionl arrry thain 

// for ($i=0; $i < count($multiDim); $i++) { 
//    echo  var_dump($multiDim[$i]);
//    echo "<br>";
// }



// main ab us ka andar ki value ko print karwana cahta hun ko kay array  main

// or es kay leuy mian nested loop ko use kay hian jis main 
//  value show hn jain gi 

for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j <count($multiDim[$i]) ; $j++) { 
     echo $multiDim[$i] [$j] . " ";
     echo "";
    }
    echo "<br>";
}

?>

<?php

// now this is three dimention array 
$multiDim = array(
    array(
        array('shair', 'alie', 'hamza', 'yasir'),
        array('fahad', 'nomi', 'zain', 'shobi'),
        array('wasemm', 'alikhan', 'hadi')
    ),
    array(
        array('ali', 'usman', 'sami'),
        array('raza', 'bilal', 'kamran'),
        array('asad', 'zahid', 'omer')
    ),
    array(
        array('jibran', 'farhan', 'hassan'),
        array('shaan', 'tariq', 'nadeem'),
        array('saif', 'talha', 'ahmed')
    )
);

// Printing the 3D array
for ($i = 0; $i < count($multiDim); $i++) {
    for ($j = 0; $j < count($multiDim[$i]); $j++) {
        for ($k = 0; $k < count($multiDim[$i][$j]); $k++) {
            echo $multiDim[$i][$j][$k] . " ";
        }
        echo "<br>";
    }
    echo "<br>";


}
?>
