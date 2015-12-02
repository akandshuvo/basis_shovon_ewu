<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>switch</title>
</head>
<body>
	<?
		$name=[
					'0'=>'shuvo',
					'1'=>'mamun',
					'2'=>'suozn'

				];

	foreach ($name as $key => $value) {
					# code...
						switch ($key) {
							case 0:
								# code...
									echo $value;
									echo '<br>';
								break;
							case 1:
								# code...
									echo $value;
									echo '<br>';
								break;
							case 2:
								# code...
									echo $value;
									echo '<br>';
								break;		
							
							default:
								# code...
								break;
		}
				}			
	


	?>
</body>
</html>