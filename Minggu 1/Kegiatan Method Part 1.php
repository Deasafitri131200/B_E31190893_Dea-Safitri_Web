<?php
class Car {
	public $comp;
	public $color = 'beige';
	public $hasSunRoof= true;
	
	public function hello(){
		return "beep";
		}
	}
	//contoh 1. contoh function inside a class = method
	$bmw = new Car ();
	$mercedes = new Car();
	
	echo $bmw -> hello();
	echo $mercedes -> hello();
?>