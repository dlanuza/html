<?php
/***********************************************\
VARIABLES DE CONEXION
\***********************************************/
	require_once("property.php");
	$cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
/***********************************************\
CONEXION AL SERVIDOR MySQL y a la BD
\***********************************************/
	//$conexion = mysqli_connect($server,$user,$pass,$bd);

    if(!$cnx){
    	echo 'Ha sucedido un error inexperado en la conexion de la base de datos';
    } else {
    	echo "Conexion exitosa!";
    }
/******************************************************************************************\
si recibe los datos desde js con post
\******************************************************************************************/
	if(isset($_POST['us'])  && isset($_POST['pa'])) {
		$user = $_POST['us'];
		$pwd = $_POST['pa'];
		/**********************************************************************************\
		en una variable se almacena la consulta en forma de cadena de texto
		\**********************************************************************************/
		//$query = "INSERT INTO usuarios(user, pass) values ('$user','$pwd')";
		/**********************************************************************************\
		a la conexion se le aplica la consulta
		\**********************************************************************************/
		$result = $conexion->query($query);
	    if (!$result){
	    	echo "Fallo registro: $query<br>".$conexion->error."<br><br>";
	    } else {
	    	echo "<br>".$result."<br>";
	    }
	    /*********************************************************************************\
		cerramos la conexion
		\*********************************************************************************/
	    $close = mysqli_close($conexion);

	    if($close){
	    	echo 'La desconexion de la base de datos se ha hecho satisfactoriamente<br>';
	    } else {
	    	echo 'Ha sucedido un error inexperado en la desconexion de la base de datos';
	    }
	    /*********************************************************************************/
		echo "<h1>Soy ".$user." ".$pwd." y vengo desde el PHP :v</h1>";
	} else {
		echo "Te taltan datos";
	}
?>
