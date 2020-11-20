<?php

include "../conexion/conexion.php";
    
$ids=$_POST['ids'];
$anombre=$_POST['anombre'];
$acontenido=$_POST['acontenido'];
$aprecio=$_POST['aprecio'];
$aimagen=$_FILES['aimagen'];


/*if($imagen["type"] == "image/jpg" OR $imagen["type"] == "image/jpeg"){
    $dir="img/" .$_FILES["imagen"]["name"];
    move_uploaded_file($_FILES["imagen"]["tmp_name"],$dir);
    $sql="UPDATE producto SET nombre='$anombre', contenido='$acontenido', precio='$aprecio', imagen='$dir' WHERE id_producto='$ids'";
    echo mysqli_query($conexion, $sql);

    $ruta = "img/".md5($imagen["tmp_name"]).".jpg";
    $sql="INSERT INTO producto(nombre, contenido, precio, imagen) VALUES('$nombre', '$contenido', '$precio', '$ruta')";
   if(mysqli_query($conexion, $sql)){
        move_uploaded_file($imagen["tmp_name"], $ruta);
      
    }     
}*/


$sql="UPDATE producto SET nombre='$anombre', contenido='$acontenido', precio='$aprecio', imagen='$aimagen' WHERE id_producto='$ids'";
echo mysqli_query($conexion, $sql);
?>