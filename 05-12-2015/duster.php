<?php 
	//declaring class
  class Duster{
        public  $color ="";
        public  $weight ="";

        public function __construct($color,$weight){  //CONSTRUCT is a magic function
        		$this->color=$color;
        		$this->weight=$weight;

        }
        
        public function sweep(){
            echo  "I am sweeping";
        }
    }


 ?>