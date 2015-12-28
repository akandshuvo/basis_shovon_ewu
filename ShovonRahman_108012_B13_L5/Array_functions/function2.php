<?php 
	echo "<h1>PUSH</h1><br>";

/*  It pushes values at the end of an array. Like in this example 1 and 2 were in the array.. after pushing 3,4.
	it is in the last of the array
*/



$array0 = array("1", "2");
array_push($array0, "3", "4");
print_r($array0);

// output will be like this: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 ) 


 ?>