
<?php

echo "<h1>SEARCH</h1><br>";

/*  It is used to search the key of a value. 
*/


$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key0 = array_search('green', $array); // $key = 2;
echo $key0."&nbsp;";
$key1 = array_search('red', $array);   // $key = 1;
echo $key1."&nbsp;";

// output will be like this: 2 1

?>
