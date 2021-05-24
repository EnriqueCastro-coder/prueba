<?php
$alumnos = array(
	//creando elementos del arreglo, en donde es otro arreglo
	'Abraham Ernesto Orellana Saravia' => array(
		'Carnet' => "OS20005",
		'S1' => "8",
		'S2' => "7.50",
		'S3' => "8.50",
		'SS' => "7",
		'PM' => "8.25"
	),
	
	'Gustavo Antonio Ardon Alas' => array(
		'Carnet' => "AA20001",
		'S1' => "6",
		'S2' => "7.50",
		'S3' => "6.50",
		'SS' => "7",
		'PM' => "7.25"
	),
	'Ana Julia Hidalgo Orellana' => array(
		'Carnet' => "HA20001",
		'S1' => "8",
		'S2' => "6.50",
		'S3' => "8.50",
		'SS' => "7",
		'PM' => "8.35"
	),
	'Bryan Antonio Rodriguez Henriquez' => array(
		'Carnet' => "RH20001",
		'S1' => "6",
		'S2' => "6.50",
		'S3' => "7.50",
		'SS' => "7",
		'PM' => "7.15"
	),
	'Carlos Amilcar Perlera Romero' => array(
		'Carnet' => "PA20001",
		'S1' => "9",
		'S2' => "8.50",
		'S3' => "9.50",
		'SS' => "8",
		'PM' => "9.35"
	),
	'Carmen Gabriela Monterroza Tejada' => array(
		'Carnet' => "MT20001",
		'S1' => "9",
		'S2' => "9.50",
		'S3' => "9.50",
		'SS' => "9",
		'PM' => "9.50"
	),
	'Jacquelinne Jisell Rivera Giron' => array(
		'Carnet' => "RG20001",
		'S1' => "7",
		'S2' => "8.50",
		'S3' => "7",
		'SS' => "6.20",
		'PM' => "7.50"
	),
	'Jaqueline Gabriela Ayala Morales' => array(
		'Carnet' => "AM20001",
		'S1' => "6",
		'S2' => "8",
		'S3' => "8",
		'SS' => "7.25",
		'PM' => "8.35"
	),
	'Jessica Marisol Hernandez Rivera' => array(
		'Carnet' => "HR20005",
		'S1' => "9",
		'S2' => "7",
		'S3' => "9",
		'SS' => "8.10",
		'PM' => "9.15"
	),
	'Keyri Arevalo Alfaro Marroquin' => array(
		'Carnet' => "AM20005",
		'S1' => "6",
		'S2' => "8.50",
		'S3' => "6",
		'SS' => "7",
		'PM' => "7.35"
	)
);	
foreach($alumnos as $alumno => $datos)
{
	echo "<h3><strong>Alumno: </strong> $alumno </h3>";
	echo "<h4>Datos</h4>";
	foreach($datos as $indice => $valor)
	{
		echo "<p> $indice:$valor </p>";
	}
}
?>