<?php 

// put your code here
function __autoload($className){
	include_once ($className.".php");

}

	$duster_white= new Duster('white','12');
	$duster_red= new Duster('red','13');
	$duster_green= new Duster('green','13');
	$duster_black= new Duster('black','13'); 


	echo $duster_white->color ; echo "&nbsp;"; echo $duster_white->weight ;
		echo "<hr>";

			echo $duster_red->color ; echo "&nbsp;"; echo $duster_red->weight ;
				echo "<hr>";

					echo $duster_green->color ; echo "&nbsp;"; echo $duster_green->weight ;
						echo "<hr>";

							echo $duster_black->color ; echo "&nbsp;"; echo $duster_black->weight ;
								echo "<hr>";



// DECLARING OBJECTS 
	$shovon = new person();
	$mamun = new  person();
	$suzon = new person();


	$shovon->name="shovon Rahman";  //SETTER
	$shovon -> greetings();        // FUNCTION CALL
	echo "&nbsp;";
	echo $shovon ->name;           //GETTER

	echo "<hr>";

	$mamun->name="Hossain mamun";
	$mamun -> greetings();
	echo "&nbsp;";
	echo $mamun ->name;

	echo "<hr>";

	$suzon->name="Motku nache";
	$suzon -> greetings();
	echo "&nbsp;";
	echo $suzon ->name;

	echo "<hr>";
          

 ?>