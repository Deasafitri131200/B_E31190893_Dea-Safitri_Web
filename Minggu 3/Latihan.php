<?php
class kalkulator_sederhana{
	private $x = 45;
	private $y = 5;
	private $z = 3;
	
	public function tambah(){
		$hasil = $this -> x + $this -> y + $this -> z;
		return $hasil;
		}
	public function kurang(){
		$kurang = $this -> x - $this ->y - $this -> z;
		return $kurang;
		}
	public function bagi(){
		$bagi = $this-> x / $this -> y / $this ->z;
		return $bagi;
		}
	public function kali (){
		$kali = $this -> x * $this -> y * $this->z ;
		return $kali;
		}
	}
	
	$Nilai = new kalkulator_sederhana();
	
	echo "Penjumlahan" .$Nilai -> tambah();
	echo "<br/>";
	echo "Pengurangan".$Nilai -> kurang();
	echo "<br/>";
	echo "Pembagiaan".$Nilai -> bagi();
	echo "<br/>";
	echo "Perkalian".$Nilai -> kali ();
	echo "<br/>";
?>