<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>oop</title>
</head>
<body>

<?php


	

	//$student_name = new student();
	//$say_greeting =new student();

	//$student_name ->name="Shovon";
	//echo $student_name->name."&nbsp;"."says"."&nbsp;";
	//$say_greeting->greeting("Good morning");



	//function __autoload($className){
		//$filename = $className.".php";
		//include_once($filename);
	//}

	//$student_name = new student();
	//$say_greeting =new student();

	//$student_name ->name="Shovon";
	//echo $student_name->name."&nbsp;"."says"."&nbsp;";
	//$say_greeting->greeting("Good morning");


function __autoload($className){
		$filename = $className.".php";
		include_once($filename);
	}

	use src\student\student;
	$student_name = new student();
	$say_greeting =new student();

	$student_name ->name="Shovon";
	echo $student_name->name."&nbsp;"."says"."&nbsp;";
	$say_greeting->greeting("Good morning");


	



?>
	
</body>
</html>