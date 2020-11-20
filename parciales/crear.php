<?php

include "../conexion/conexion.php";
    $nombre=$_POST['nombre'];
    $contenido=$_POST['contenido'];
    $precio=$_POST['precio'];
    $imagen=$_FILES['imagen'];


if($imagen["type"] == "image/jpg" OR $imagen["type"] == "image/jpeg"){
    $dir="img/" .$_FILES["imagen"]["name"];
    move_uploaded_file($_FILES["imagen"]["tmp_name"],$dir);
    $sql="INSERT INTO producto(nombre, contenido, precio, imagen) VALUES('$nombre', '$contenido', '$precio', '$dir')";
    echo mysqli_query($conexion, $sql);

}
?>