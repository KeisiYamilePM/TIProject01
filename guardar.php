<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No se pudo conectar con el servidor";
	}else{

		$base=mysql_select_db('prueba');
		if(!$base){
			echo"No se encontro la base de datos";			
		}
	}
	//recuperar las variables
	$nombre=$_POST['nombre'];
	$pais=$_POST['pais'];
	$ciudad=$_POST['ciudad'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO users VALUES('$nombre','$pais','$ciudad')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br>
		<a href='index.html'>Volver</a>";
	}
?>