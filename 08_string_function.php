

<?php
$name = "shari is a good boy";

echo $name;
echo "<br>";

echo strlen($name);
echo "<br>";
echo str_word_count($name);  // use word meaning 1
echo "<br>";
echo strrev($name);  // uay hamray strig ko reverse karata hia 
echo "<br>";
echo strpos($name , "a");  // uay stirg kay andar ki value ko malom karat haina yad rhain k hum 0 sy count start kray guyecho jis index par hnga wo coutn show hnga;
echo "<br>";
echo str_replace("shari", "larrii" , $name); // es main shari ko gari say replace kr dun variable name is $name ;
echo "<br>";
echo str_repeat($name,  5); // es ka matab hian ka kitni bar pa es ko reapt karna cahtian hun 
echo "<br>";
echo rtrim("<pre>    this is     good boy   </pre>"); //uay harmay pass space daita hia
echo "<br>";
/// ab agr main space daina chata hun 
echo "<pre>";
echo rtrim("  this is     good boy   </pre>"); 
echo ltrim("  this is     good boy   </pre>"); 
echo "</pre>";



?>