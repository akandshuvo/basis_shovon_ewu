<?php

echo "<h1>SEARCH</h1><br>";

/*  It is used to print the array in reverse prder. 
*/



$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);

echo "<pre>";
print_r($input);
echo "</pre>";
echo "<pre>";
print_r($reversed);
echo "</pre>";


/* output will be like this:

Array
(
    [0] => php
    [1] => 4
    [2] => Array
        (
            [0] => green
            [1] => red
        )

)

Array
(
    [0] => Array
        (
            [0] => green
            [1] => red
        )

    [1] => 4
    [2] => php
)



*/

?>
