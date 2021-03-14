<?php
//Declare class
class Car{
	//properties
	public $comp;
	public $color = 'beige';
	public $hasSunRoof = true;
	
	//method = hello
	public function hello(){
		return "beep";
		
		}
	}
	//method get a beep
	
	echo "<br />";
	echo $mercedes -> hello();//beep
	
	//membuat instance
	$bmw = new Car();
	$mercedes = new Car();
	
	//get Values
	echo $bmw -> color;//beige
	echo "<br/>";
	echo $mercedes -> color;//beige
	echo "<hr/>";
	
	//set values
	$bmw -> color ='blue';
	$bmw -> comp = "BMW";
	$mercedes -> comp = "Mercedes Benz";
	
	//get Values
	echo $bmw -> color; //blue
	echo "<br/>";
	echo $mercedes -> color; //beige
	echo "<br/>";
	echo $bmw -> comp; //BMW
	echo "<br/>";
	echo $mercedes -> comp; //Mercedes Benz
	echo "<hr/>"
	
	
	
?>