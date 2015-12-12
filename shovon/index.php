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
		$filename = str_replace('\\', '/',$className.".php");
		include_once($filename);
	}

	use src\bitm\student\student;
	use src\bitm\university\university;
	$student_name = new student();
	$say_greeting =new student();

	$student_name ->name="Shovon";
	echo $student_name->name."&nbsp;"."says"."&nbsp;";
	$say_greeting->greeting("Good morning");
	echo "<br>";

	$university_name = new university();
	$university_name->versity_name("HE IS FROM EAST WEST UNIVERSITY");


	



?>
	
</body>
</html>