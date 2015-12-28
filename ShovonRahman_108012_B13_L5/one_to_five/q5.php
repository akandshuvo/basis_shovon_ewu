<?php 
echo "<h1>ANSWER TO THE QUESTION NO 5</h1><br>";

$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
				 "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
				 "holes" => array ( "First", 5 => "Second", "Third"));


echo $color['color']['a'];
echo "<br>";
echo $color['holes'][5];


 ?>