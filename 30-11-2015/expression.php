<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Expression</title>
</head>
<body>

<?
//POST INCREMENT
	$a=5;
	echo $a++;
	echo "<br>";
	echo $a;
	echo "<br>";
//PRE INCREMENT
	$b=5;
	echo ++$a;
	echo "<br>";
	echo $a;

//***************************************************************	

	function multiply($i){

		return $i*2;
	}

	$b=$a=5;
	$c=$a++;

	echo $c;

	echo "<br>";

//*****************************************************************


$x=5;
	echo $x;
		echo "<br>";
			echo $x+++$x++;
				echo "<br>";
					echo $x;
						echo "<br>";
							echo $x---$x--;
								echo "<br>";
									echo $x;

?>
	
</body>
</html>