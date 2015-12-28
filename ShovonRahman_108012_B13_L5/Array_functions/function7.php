<?php

echo "<h1>UNIQUE</h1><br>";

/*  It is used to removes duplicate values from an array 
*/





$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
echo "<pre>";
print_r($result);
echo "</pre>";



/* output will be like this:

Array
(
    [a] => green
    [0] => red
    [1] => blue
)


*/

?>
