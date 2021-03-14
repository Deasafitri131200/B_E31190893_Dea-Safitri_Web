<?php
class laptop{
	public $pemilik;
	public $merk;
	
	public function hidupkan_laptop(){
		return "Hidupkan laptop". $this -> merk ." punya".  $this -> pemilik;
		}
	public function matikan_laptop(){
		return "Matikan laptop". $this -> merk. " punya". $this -> pemilik;
		}
	public function restart_laptop(){
		$matikan = $this -> matikan_laptop();
		$hidupkan = $this -> hidupkan_laptop();
		$restart=$matikan."&nbsp;".$hidupkan;
		return $restart;
		}
	} 
	$laptop_A = new laptop();
	$laptop_B = new laptop();
	$laptop_C = new laptop();
	
	$laptop_A -> pemilik = " A";
	$laptop_B -> pemilik = " B";
	$laptop_C -> pemilik = " C";
	$laptop_A -> merk = " asus";
	$laptop_B -> merk = " acer";
	$laptop_C -> merk = " lenovo";
	
	echo $laptop_A -> hidupkan_laptop();
	echo "<br/>";
	echo "<br/>";
	echo $laptop_B -> matikan_laptop();
	echo "<br/>";
	echo "<br/>";
	echo $laptop_C -> restart_laptop();
?>