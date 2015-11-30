<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>serialize.unserialize</title>
</head>
<body>
	
	<?
		$arrayName = array('bitm',1,2,3,4,'Batch-13');
		$b=serialize($arrayName);
		echo $b;
		echo "<br>";
		echo "<pre>";
		$c=unserialize($b);
		print_r($c);
		echo "</pre>";
	?>



	
</body>
</html>