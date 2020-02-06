<?php 
	class Calculation{
		function add($a,$b){
			echo "Summation = ".($a+$b)."<br>";
		}

		function sub($a,$b){
			echo "Subtraction = ".($a-$b)."<br>";
		}

		function mul($a,$b){
			echo "multiplication = ".($a*$b)."<br>";
		}

		function div($a,$b){
			echo "division = ".($a/$b)."<br>";
		}
	}
 ?>


 <?php 
 	class Calculator{
 		public function add($x, $y){
 			echo " Summation is: ".($x+$y)."<br>";
 		}
 		public function sub($x, $y){
 			echo " Subtraction is: ".($x-$y)."<br>";
 		}
 		public function mul($x, $y){
 			echo " multiplication is: ".($x*$y)."<br>";
 		}
 		public function div($x, $y){
 			echo " division is: ".($x/$y)."<br>";
 		}

 	}

  ?>