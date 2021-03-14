<?php
//the parent class
class car {
	//the $model property is now protected, so it can be accessed 
	//from within the child classes
	protected $model;
	//public setter method
	public function setModel($model){
		$this -> model = $model;
		}
	}
	
	//the child class
	class SportsCar extends Car {
		//has no problem to get a protected property that belongs to the parent
		public function hello(){
			return "beep! I am a <i>". $this -> model . "</i><br/>";
			}
		}
//Create an instance from the child class
$sportaCar1 = new SportsCar();
		
?>