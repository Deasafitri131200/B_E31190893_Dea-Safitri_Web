<?php
//the parent class has hello method that return "beep".
class Car{
	final public function helloe(){
		return "beep";
		}
	}
//the child class has hello method that tries to override the hello method in the parent 
class SportsCar extends Car{
	public function hello(){
		return "Hallo";
		}
	}
	
	//create a new object
	$sportsCar1 = new SportsCar();
	
	//get the result of the hello method
	echo $sportsCar1 -> hello();
?>