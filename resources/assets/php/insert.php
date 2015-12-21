<?php
require_once("property.php");
$cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
?>
        <script type="text/javascript">
            //console.log($cnx);
        </script>
<?php

$nombres = pg_escape_string($_POST['nombres']);
$apellidos = pg_escape_string($_POST['apellidos']);
$carrera = pg_escape_string($_POST['carrera']);
$facultad = pg_escape_string($_POST['facultad']);
$carnet = pg_escape_string($_POST['carnet']);
$url = pg_escape_string($_POST['url']);

if($_POST){
    $result = pg_query("INSERT INTO estudiante(nombres, apellidos, carrera, facultad, carnet)VALUES('".$nombres."', '".$apellidos."', '".$carrera."', '".$facultad."', '".$carnet."')");
    if(!$result){
        ?>
                <script type="text/javascript">
                    console.log("error en la insercion");
                </script>
        <?php
        echo "ha ocurrido un error";

?>
        <script type="text/javascript">
            //window.location= "../../../paginas/main.php";
        </script>
<?php

    }else{
        ?>
                <script type="text/javascript">
                    console.log("insercion sin error");
                </script>
        <?php
        echo 'no ha ocurrido un error';
    }
    //pg_free_result($result);
}else{
    ?>
            <script type="text/javascript">
                console.log("error en los datos");
            </script>
    <?php
    echo 'Debe especificar todos los datos';
}
pg_close();



 ?>
