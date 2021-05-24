<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de funciones</title>
	<!--incluyendo jquery -->
	<script src="../js/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script>
		//aqui va codigo javascript
		$(document).ready(function(){
			$('#btnCalcular').on("click",function(){
				if($('#n1').val().length == 0 || $('#n2').val().length == 0){
					alert('Complete los datos para hacer el calculo');
					return;
				}else{
					//enviamos los datos al servidor por post
					$.post('./procesa_opc.php', $('#form-datos').serialize(), function(response){
						//mostrando respuesta del servidor en el div resultado
						$('#resultado').html(response);
					});
				}
			});
		});
	</script>
</head>
<body>
	<header id="header" class="">
		<hgroup>
			<h1>Funciones definidas por el Programador</h1>
		</hgroup>
	</header><!-- /header -->
	<h2>Operacones Basicas</h2>
	<form id="form-datos">
		<table>
			<tbody>
				<tr>
					<td>
						<input type="radio" value="s" name="opc" checked>Suma
						&nbsp;&nbsp;
						<input type="radio" value="r" name="opc" >Resta
						&nbsp;&nbsp;
						<input type="radio" value="m" name="opc" >Multiplicacion
						&nbsp;&nbsp;
						<input type="radio" value="d" name="opc" >Division
						&nbsp;&nbsp;
					</td>
				</tr>
				<tr>
					<td>Numero 1: <input type="text" id="n1" name="n1" size="8"></td>											
				</tr>
				<tr>
					<td>Numero 2: <input type="text" id="n2" name="n2" size="8"></td>											
				</tr>				
				<tr>
					<td align="center">
						<button type="button" id="btnCalcular">Calcular</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	<div id="resultado"></div>
</body>
</html>