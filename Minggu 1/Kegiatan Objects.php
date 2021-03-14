<?php include("Kegiatan Property.php");?>
<?php
//contoh Objects
$bmw = new Car();
$mercedes = new Car();
//get Objects Properties
echo $bmw -> color;
echo $mercedes -> color;

//set Object Properties 
//(Set the color to 'blue' in the bmw object)
$bmw -> color ='blue';
//(set value $comp property untuk ke dua objects)
$bmw-> comp = "BMW";
$mercedes->comp ="Mercedes Benz";

//get the color $bmw object
echo $bmw -> color;

//get the color and camp $mercedes object
echo $mercedes -> color;
echo $mercedes -> comp;
?>