
<?php
echo "<h1>SHUFFLE</h1>";

// It is used to shuffle value from the range.


$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}


// output will be like this: 5 4 2 6 9 13 15 3 17 8 10 20 12 18 11 16 19 1 14 7 
?>
