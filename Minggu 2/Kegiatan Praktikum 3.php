<?php
class Car {
	public $tank;
	//add gallons of fuel to the tank when we fill it.
	public function fill ($float){
		$this -> tank += $float;
		return $this;
		}
		
		//substact gallons of fuel from the tank as we ride the car.
		public function ride ($float){
			$miles = $float;
			$gallons =$miles/80;
			$this -> tank -= ($gallons);
			return $this;
			}
	}
	
	//create a new object from the car class
	$bmw = new Car();
	
	//add 10 galons of fuel, them ride 40 miles,
	//and get the number of gallons in the tank.
	$tank = $bmw -> fill (10) -> ride (40) -> tank;
	
	//printout
	echo "The number of gallons left in the tank: ". $tank."gal.";
?>