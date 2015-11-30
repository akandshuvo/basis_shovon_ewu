<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
<?
//TRAITS
	trait trait_use{
		public function welcome(){
			echo "Hello, oilcome to BASIS";
		}

	}

/**
	* 
	*/
	class greetings 
	{
		
		use trait_use;
	}	

	greetings::welcome();

?>

</body>
</html>