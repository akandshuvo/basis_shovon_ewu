<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables</title>
</head>
<body>
	
	<?php 
		//Boolean
		$a= true; // returns 1
		$b=false; // return 0
		echo $a;
		echo "<br>";
		//integer
		$print = 5;
        echo $print;
        echo "<br>";
		//String
		$name="Shovon Rahman";
        $id ="108012";

        echo $name."&nbsp;".">>>".$id;
        echo "<br>";
        //float
		$float =5.123457489;
        echo $float;
        echo "<br>";
        // indexed array
        $a=array('shovon','Mamun');
        echo $a[0];
        echo "<br>";
        echo $a[1];
        // Associative array
        $array=array("name"=>"shovon","id"=>"108012");
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
        echo "<br>";

        //

        $loop = array('0' =>'shovon','1'=>'mamun','2'=>'suzon');
        for($i=0;$i<=2;$i++){
        	echo "<pre>";
        	$a=$loop[$i];
        	var_dump($a);
        	echo "</pre>";
        }
	 ?>

</body>
</html>