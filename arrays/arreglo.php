<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Arreglos en PHP</title>
	</head>
	<body>
	<?php
		//creamos el array donde se guardaran los datos 
		$arreglo = [];
		//comprobamos si se ha recibido por POST la variable array y si tiene algun dato
		if(isset($_POST['array'])){
			//obteniendo el valor pasado por POST
			$arreglo = unserialize(stripslashes($_POST['array']));	
		}
		//si se recibe un dato
		if(isset($_POST['dato'])){
			//agregamos valor al arreglo
			$arreglo[] = $_POST['dato'];
		}
		//verificamos si el arreglo tiene elementos
		if(count($arreglo)>0){
			//mostramos los valores del arreglo
			foreach($arreglo as $elemento){
				echo "<br>".$elemento;
			}
		}
	?>	
	<header id="header" class="">
		<hgroup>
			<h1>Fundamentos de PHP</h1>
			<h2>Arreglos Indexado Numericamente</h2>
		</hgroup>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<table>
				<tbody>
					<input type="hidden" name="array" value='<?php echo serialize($arreglo); ?>'>
					<tr>
						<td>Digite dato para el arreglo</td>
						<td> <input type="text" name="dato"></td>
						<td> <input type="submit" name="submit" value="Aceptar"></td>
					</tr>	
					<tr>
						<td colspan="3" align="center"><a href="../index.php">Ir al inicio</a></td>						
					</tr>
				</tbody>
			</table>
		</form>
	</header><!-- /header -->	
</body>
</html>	