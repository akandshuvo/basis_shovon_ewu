 <?php
 
namespace bitm\person;
class Person{
	public $name='';
	public function __construct(){
		echo "Hello".__LINE__;
		echo "<hr/>";
	}
	public function sayGreeting($greeting) {
		echo $greeting;
	}
}

?>