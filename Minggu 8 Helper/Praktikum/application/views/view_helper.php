<!DOCTYPE html>
<html>
<head>
	<title>Head Helper HTML</title>
</head>
<body>
	<?php
	echo heading("Hello CI",1);
	echo heading("Hello CI",2);
	echo heading("Hello CI",3);
	echo heading("Hello CI",4);
	echo heading("Hello CI",5);
	echo heading("Hello CI",6);

	$gambar = array(
		'scr' => 'https://static.cdn-cdpl.com/source/17045/codeignitor_service_provider-image(700x350-crop)-image(700x350-crop).jpg',
		'alt' => 'Codeigniter - CI',
		'class' => 'post_image',
		'width' => '300',
		'height' => '300',
		'title' => 'Artesonraju Moutain'
	);
	echo img($gambar);
	?>

</body>
</html>