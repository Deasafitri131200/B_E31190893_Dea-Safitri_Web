<?php
class item_produk{
	public $ukuran;
	public $warna;
	public  $nama;
	
	public function Ukuran(){
		return $Ukuran = $this -> ukuran;;
		}
	public function Warna(){
		return $Warna = $this -> warna;
		}
	public function Nama(){
		return $Nama = $this -> nama;
		}
	}
	
class Topi extends item_produk{
	public $model;
	public function Model_Topi(){
		return $Model_Topi = $this -> model;
		}
	}
		
	class Celana extends item_produk{
		public $tipe;
		public $model;
		public function Tipe_Celana(){
			return $Tipe_Celana = $this -> tipe;
			}
		public function Model_Celana(){
			return $Model_Celana = $this -> model;
			}
		}
		
	class Baju extends item_produk{
		public $tipe;
		public function Tipe_Baju(){
			return $Tipe_Baju = $this -> tipe;
			}
		}
//Topi
$Beli_Topi = new Topi();

$Beli_Topi -> ukuran =" XL";
$Beli_Topi -> warna =" Purple";
$Beli_Topi -> nama =" Toptop";
$Beli_Topi -> model ="Beret Hat/Newsboy Capl";

echo "Membeli Topi Ukuran ". $Beli_Topi -> Ukuran()."<br/>";
echo "Membeli Topi Warna ".$Beli_Topi -> Warna()."<br/>";
echo "Membeli Topi Nama ".$Beli_Topi -> Nama()."<br/>";
echo "Membeli Topi Model ".$Beli_Topi -> Model_Topi();
echo "<hr/><br/>";

//Celana
$Beli_Celana = new Celana();

$Beli_Celana -> ukuran =" X";
$Beli_Celana -> warna =" white";
$Beli_Celana -> nama =" Top";
$Beli_Celana -> tipe ="Kain";
$Beli_Celana -> model ="A";

echo "Membeli Celana Ukuran ".$Beli_Celana -> Ukuran()."<br/>";
echo "Membeli Celana Warna ".$Beli_Celana -> Warna()."<br/>";
echo "Membeli Celana Nama ".$Beli_Celana -> Nama()."<br/>";
echo "Membeli Celana Tipe ".$Beli_Celana -> Tipe_Celana()."<br/>";
echo $Beli_Celana -> Model_Celana()."<br/>";
echo "<hr/><br/>";

//Baju
//Topi
$Beli_Baju = new Baju();

$Beli_Baju -> ukuran =" L";
$Beli_Baju -> warna =" Purple";
$Beli_Baju -> nama =" Taptop";
$Beli_Baju -> tipe ="Korea";

echo "Membeli Baju Ukuran ".$Beli_Baju -> Ukuran()."<br/>";
echo "Membeli Baju Warna ".$Beli_Baju -> Warna()."<br/>";
echo "Membeli Baju Nama ".$Beli_Baju -> Nama()."<br/>";
echo "Membeli Baju Tipe ".$Beli_Baju -> Tipe_Baju();
echo "<hr/><br/>";
?>