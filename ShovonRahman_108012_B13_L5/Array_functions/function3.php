<?php 
	echo "<h1>RAND</h1><br>";

/*  It is used to pick random element from the array. we can call 1 one item or many item through this function
*/



$array0 = array("Shovon", "Mamun", "SUzon", "Parvez", "asadur");
$rand_array = array_rand($array0, 3);
echo $array0[$rand_array[0]] . "\n";
echo $array0[$rand_array[1]] . "\n";
echo $array0[$rand_array[2]] . "\n";



// output will be like this: Shovon Mamun Parvez 


 ?>