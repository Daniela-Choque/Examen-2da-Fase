<?php

include "../conexion/conexion.php";
    
$ids=$_POST['ids'];
$anombre=$_POST['anombre'];
$acontenido=$_POST['acontenido'];
$aprecio=$_POST['aprecio'];
$aimagen=$_FILES['aimagen'];


$sql="UPDATE producto SET nombre='$anombre', contenido='$acontenido', precio='$aprecio', imagen='$aimagen' WHERE id_producto='$ids'";
echo mysqli_query($conexion, $sql);
?>