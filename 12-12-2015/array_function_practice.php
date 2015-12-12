<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>array fucntion</title>
</head>
<body>
	

<?php
	#ARRAY COMBINE
	#----------------------------------------
	$a = array('ID', 'NAME', 'BATCH');
	$b = array('108012', 'SHOVON RAHMAN SHUVO', 'WEB DEVELOPMENT IN PHP-BATCH13');
	$c = array_combine($a, $b);

	echo "<pre>";
		print_r($c);
	echo "<pre>";
	echo "<br>";
	#----------------------------------------

	#array_filter
	#----------------------------------------


		function odd($var)
		{
		    // returns whether the input integer is odd
		    return($var & 1); //$var & 1 - is bitwise AND it checks if $var is ODD value
		}

		function even($var)
		{
		    // returns whether the input integer is even
		    return(!($var & 1)); //$var & 1 - is bitwise AND it checks if $var is ODD value
		}

		$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
		$array2 = array(6, 7, 8, 9, 10, 11, 12);

		echo "Odd :\n";
		print_r(array_filter($array1, "odd"));
		echo "Even:\n";
		print_r(array_filter($array2, "even"));


	#----------------------------------------

	#ARRAY_FLIP
	
	#----------------------------------------
	$a_flip = array('ID','NAME','BATCH');
	$b_flip = array("108012","SHOVON RAHMAN SHUVO","WEB DEVELOPMENT IN PHP-BATCH13");
	$c_flip = array_flip($a_flip);
	$d_flip = array_flip($b_flip);

	echo "<pre>";
		print_r($c_flip);
	echo "<pre>";
	echo "<pre>";
		print_r($d_flip);
	echo "<pre>";
	echo "<br>";


?>





</body>
</html>