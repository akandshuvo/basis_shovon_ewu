
<?php

echo "<h1>UNSHIFT</h1>";
/*
	It is used to prepend one or more elements to the beginning of an array

*/
$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");

echo "<pre>";
print_r($queue);
echo "</pre>";

/*
Output will be like this: 

Array
(
    [0] => apple
    [1] => raspberry
    [2] => orange
    [3] => banana
)

*/

?>
