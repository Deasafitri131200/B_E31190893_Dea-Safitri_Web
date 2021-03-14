<?php
//The parent class has hello method that return "beep".
class Car{
	public function hello(){
		return "beep";
		}
	}
//the child class has hello method that return "hallo"
class SportsCar extends Car{
	public function hello(){
		return "Hallo";
		}
	}
	//Create a new object
	$sportsCar1 = new SportsCar();
	
	//get the result of the hello method
	echo $sportsCar1 -> hello();
?>