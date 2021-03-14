<?php
// the parent class
class Car {
	//the $model property is private, thus it can be accessed
	//only from incide the class
	private $modal;
	//public setter method
	public function setModel ($model){
		$this -> model = $model;
		}
	}
	// the child class
	class SportCar extends Car{
		//Tries to get a private property that belongs to the parent
		public function hello(){
			return "beep! I am a <i>". $this -> modal . "</i><br/>";
			}
		}
		//Create an Instance from the child class
		$sportCart1 = new SportCar();
		//set the clase model name
		$sportCart1 -> setModel ('Mercedes Bens');
?>