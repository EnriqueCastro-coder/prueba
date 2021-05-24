<?php
$productos = array(
	//creando elementos del arreglo, en donde es otro arreglo
	'Smarphone' => array(
		'marca' => "Sansung",
		'modelo' => "Galaxy Note 10+",
		'precio' => "$1,000.00"
	),
	
	'Tablet' => array(
		'marca' => "Asus",
		'modelo' => "MeMo Pad",
		'precio' => "$200.00"
	),
	'Laptop' => array(
		'marca' => "HP",
		'modelo' => "Probook 450 G5",
		'precio' => "$1,100.00"
	)
);	
foreach($productos as $producto => $detalles)
{
	echo "<h1><strong>Producto: </strong> $producto </h1>";
	echo "<h4>Detalle</h4>";
	foreach($detalles as $indice => $valor)
	{
		echo "<p> $indice:$valor </p>";
	}
}
?>