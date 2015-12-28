<?php 
	echo "<h1>POP</h1><br>";


// It popS the last ELEMENT , here it  IS 4. the pop function will pop the 4 and keep the remains in the array.
// output will be like this: Array ( [0] => 1 [1] => 2 [2] => 3 ) 	



$array0= array("1", "2", "3", "4");
$array1 = array_pop($array0);
print_r($array0);



 ?>