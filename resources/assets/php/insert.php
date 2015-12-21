<?php
require("property.php");
$cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
?>

<?php


    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $carrera = $_POST['carrera'];
    $facultad = $_POST['facultad'];
    $carnet = $_POST['carnet'];
    //$url = $_POST['url'];
    $result = pg_query($cnx, "INSERT INTO estudiante(nombres, apellidos, carrera, facultad, carnet)VALUES('".$nombres."', '".$apellidos."', '".$carrera."', '".$facultad."', '".$carnet."')");
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
