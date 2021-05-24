<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Arreglos en PHP</title>
	</head>
	<body>
	<?php
		//creamos el array donde se guardaran los datos 
		$agenda = array();
		//comprobamos si se ha recibido por POST la variable array y si tiene algun dato
		if(isset($_POST['array']) && $_POST['array']){
			//obteniendo el valor pasado por POST
			$agenda = unserialize(stripslashes($_POST['array']));	
		}
		//si se recibe un nombre y telefono
		if(isset($_POST['nombre']) && isset($_POST['telefono'])){
			//agregamos el nuevo nombre y telefono
			$agenda[$_POST['nombre']] = $_POST['telefono'];
		}
		//verificamos si el arreglo tiene elementos
		if(count($agenda)>0){
			//mostramos los valores del arreglo
			foreach($agenda as $nombre=>$telefono){
				echo "<br>".$nombre."=>".$telefono;
			}
		}
	?>	
	<header id="header" class="">
		<hgroup>
			<h1>Fundamentos de PHP</h1>
			<h2>Arreglos Asociativo</h2>
		</hgroup>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<h4>Digite los datos del contacto</h4>
			<table>
				<tbody>
					<input type="hidden" name="array" value='<?php echo serialize($agenda); ?>'>
					<tr>
						<td>Nombre</td>
						<td> <input type="text" name="nombre"></td>						
					</tr>
					<tr>
						<td>Telefono</td>
						<td> <input type="text" name="telefono"></td>						
					</tr>
					<tr>	
						<td colspan="2"> 
							<input type="submit" name="submit" value="Aceptar">
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><a href="../index.php">Ir al inicio</a></td>						
					</tr>
				</tbody>
			</table>
		</form>
	</header><!-- /header -->	
</body>
</html>	