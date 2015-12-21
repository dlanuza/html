<?php
require_once("property.php");
$cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
?>

<?php
echo "Fallo registro: $result<br>";

    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $carrer = $_POST['carrera'];
    $faculta = $_POST['facultad'];
    $carne = $_POST['carnet'];
    //$url = $_POST['url'];
    $query = "INSERT INTO estudiante(nombres, apellidos, carrera, facultad, carnet)VALUES('".$nombre."', '".$apellido."', '".$carrer."', '".$faculta."', '".$carne."')";
    //$result = pg_query("INSERT INTO estudiante(nombres, apellidos, carrera, facultad, carnet)VALUES('".$nombre."', '".$apellido."', '".$carrer."', '".$faculta."', '".$carne."')");
    $result = pg_query($cnx, $query);
	echo "Fallo registro: $result<br>";

        ?>
                <script type="text/javascript">
                    console.log("error en la insercion");
                </script>
        <?php


?>
        <script type="text/javascript">
            //window.location= "../../../paginas/main.php";
        </script>
<?php


    //pg_free_result($result);

pg_close();



 ?>
