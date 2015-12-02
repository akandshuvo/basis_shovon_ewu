<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>for Each</title>
</head>
<body>

<?
//ONE DIMENTIONAL ARRAY DECLARATION		
	$goal=[
			'Ronaldo'=>61,
			'Messi'=>50,
			'Neymar'=>40
		];
		
// One dimentional array Print using for each
	foreach ($goal as $player => $value) {
		# code...
		echo $player.'&nbsp;'.'scored'.'&nbsp;'.$value.'&nbsp;'.'goal in la liga'.'<br>';
	}
	echo  '<br><br><br><br><br>';


// 2 DIMENTIONAL ARRAY DECLARATION
   $info=[
   			'Ronaldo'=>[
   							'League' => 'La liga',
   							'Team'=>'Real Madrid',
   							'total_match'=>260,
   							'goal'=>300 
   						],

   			'Messi'=>[
   							'League' => 'La liga',
   							'Team'=>'Barcelona',
   							'total_match'=>260,
   							'goal'=>300 
   					],

   			'Neymar'=>[
   							'League' => 'La liga',
   							'Team'=>'barcelona',
   							'total_match'=>260,
   							'goal'=>300 
   					]

   	];


// 2 DIMENTIONAL ARRAY PRINTING USING FOR EACH
   foreach ($info as $player => $value) {
   	echo 'Player Name:'.'&nbsp;'.$player.'<br>';
   			foreach ($value as $information => $value2) {
   				echo $information.':'.'&nbsp;'.$value2.'<br>';
   			}

		echo "<br>";
   }
// PRINTING USING VAR_DUMP
	echo "<br>";
	echo "<pre>";
	echo var_dump($info);
	echo "</pre>";
	echo "<br>";

 // 3 DIMENTIONAL ARRAY
   $info2=[
   			'Ronaldo'=>[
			   				'Full_name'=>[
			   								'Firstname'=>'Cristiano',
			   								'Middlename'=>'Ronaldo',
			   								'Last name'=>'dos Santos Aveiro'
			   							],
			   				'League' => 'La liga',
			   				'Team'=>'Real Madrid',
			   				'Total_match'=>260,
			   				'Goal'=>300 
		   				],

   			'Messi'=>[
   							'Full_name'=>[
   											'Firstname'=>'Lionel',
   											'Middlename'=>' Andrés',
   											'Last name'=>'Messi'
   										 ], 
   							'League' => 'La liga',
   							'Team'=>'Barcelona',
   							'Total_match'=>260,
   							'Goal'=>300
   					],

   			'Neymar'=>[
   							'Full_name'=>[
   											'Firstname'=>'Neymar',
   											'Middlename'=>'da Silva',
   											'Last name'=>'Santos Júnior[1]'
   										],
   							'League' => 'La liga',
   							'Team'=>'barcelona',
   							'Total_match'=>260,
   							'Goal'=>300 
   						]

   	];


// PRINTING 3 DIMENTIONAL ARRAY VALUE USING FOR EACH

   foreach ($info2 as $player => $information) {
   	echo 'Player Name:'.'&nbsp;'.$player.'<br>';
   		foreach ($information as $key => $value) {
   				# code...


   			if (is_array($value)) {                   // Checking if there is an array 
   				echo $key.'<br>';					 //	 if array, printing the values				
   				foreach ($value as $key1 => $value1) {
   	   				echo $key1.'&nbsp;:'.$value1.'<br>';
   			}
   			}
   			else{
   				echo $key.':'.$value.'<br>';         // else printing the non-array values
   			}
   		
   			
   			}	
   		

		echo "<br>";
   }  
// PRINTING USING VAR_DUMP
	echo "<br>";
	echo "<pre>";
	echo var_dump($info2);
	echo "</pre>";
	echo "<br>";


?>
</body>
</html>