

<?php
echo "Well come to Local and global variable in php <br> ";

/// matlab ka ap ka variabl kahan access hian 

// agar main simple koe variabl eko decalred kya hian 

// wo variable jo funciotn kay bahar hntian hian wo hamray pass global variable hntin
// wo variable jo funcion kay andar hntian  hian wo hamray pass local variable hntina


// uay hamray pass global vriable hntian hain

$shari = 100;
echo $shari;

echo "<br>";

// uay local variable hntain hain
function printValue()
{
    $shari = "good";   // local  variable 
    echo "Now shari is a $shari boy";
}
printValue();







/// ab agr main global varaibe ko ko local kay andar accesss karwan cahta hun 
echo "<br>";

$a = "localvariabe ";
$b = 4;
function hello(){
    // main agar global variable ko local ka andar access karna cahta hun tu
    global $a, $b ;
    echo "main is $a hun ";
    echo "main ek  $b  number hun ";
}
hello();








?>