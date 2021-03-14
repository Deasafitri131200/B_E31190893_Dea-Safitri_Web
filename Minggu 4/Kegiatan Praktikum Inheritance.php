<?php
//the parent class
class Car{
	//parivate property inside the class
	private $model;
	//public setter method
	public function setModel($model){
		$this -> model = $model;
		}
	public function hello (){
		return "beep! I am a <i>". $this -> model . "<i/><br/>";
		}
	}
//the chilld clase inherita the code from the perent class
class SportsCar extends Car{
	//No Code in The Child Class
	}
//Create an instance from the child class
$sportsCarl = new SportsCar();

//Set the value of the class' property.
//For this aim, we use a method that we created in the parent
$sportsCarl = setModel ('Mercedes Benz');

//Use another method that the child class inheritedfrom the parent class
echo $sportsCarl -> hello ();

?>