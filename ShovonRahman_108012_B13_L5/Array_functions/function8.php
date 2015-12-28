
<?php

?>
<?php

echo "<h1>SHIFT</h1><br>";

/*  It is used to Shift an element off the beginning of array.
*/




$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
echo "<pre>";
print_r($stack);
echo "</pre>";



/* output will be like this:

Array
(
    [0] => banana
    [1] => apple
    [2] => raspberry
)

*/

?>