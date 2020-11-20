<?php

include "../conexion/conexion.php";
    
$ids=$_POST["ids"];
$sql= "DELETE FROM producto WHERE id_producto = '$ids'";
echo mysqli_query($conexion, $sql);

?>
