
<?php

echo "<h1>REPLACE</h1><br>";

/*  It is used to Replaces elements from passed arrays into the first array
*/


$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");

$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);


// output will be like this:Array ( [0] => grape [1] => banana [2] => apple [3] => raspberry [4] => cherry ) 
?>
