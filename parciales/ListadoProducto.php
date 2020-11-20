<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Express Lacteos</title>
    <script src="../css/materialize/jquery-3.4.0.min.js"></script>
    <script src="../css/materialize/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../css/materialize/css/materialize.min.css">
    <script src="../funciones/ajax.js"></script>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 

    <style>
       .contents{ 
            text-align: center;
            display:flex;
            justify-content:center;
        }

        .row{
            display:flex;
            justify-content:center;
            
        }

        
        .ac{
            display:flex;
            justify-content:center;
            
        }

        .ag{
            background: #9FD5D1;
        }


        thead{
            text-align: center;
        }

        th{
            text-align: right;
        }

        td{
            text-align: right;
        }

        .b{
            text-align: center;
        }
        
      </style>

</head>
<body>

<header>
    <div class="t">
        <a href="#">Logo</a>
        <div class="menu" id="ham"><a href="#">&#9776;</a></div>
        </div>
        <nav>
          <a href="index.html">Inicio</a>
          <a href="Productos.html">Productos</a>
          <a href="Opiniones.html">Opiniones</a>
          <a href="Contactos.html">Contactos</a>
          <a href="RegistrarProducto.php">Registrar Producto</a>
          <a href="ListadoProducto.php">Lista de Productos</a>
      </nav>
<section class="textos-header">
    <h1>Express Lacteos</h1>
    <h2>Distribuidora de Lacteos</h2>
</section>
<!-----<div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
        style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: #fff;"></path>
    </svg></div>-->
</header>

<div class="contents">
    <h5>Lista de Productos</h5>
</div>
<div class="col 10">
    <table border=5>
        <thead >
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Contenido</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th class="b">Realizar Cambios</th>
            </tr>
        </thead>
         <?php
            include '../conexion/conexion.php';
            $sql='SELECT * FROM producto';
            $ejecutar = mysqli_query($conexion, $sql);
            while($fila=mysqli_fetch_array($ejecutar)){

                $datos=$fila[0]."||".$fila[1]."||".$fila[2]."||".$fila[3]."||".$fila[4];

             
         ?>

        <tbody>
            <tr>
                <td><?php echo $fila[0];?></td>
                <td><?php echo $fila[1];?></td>
                <td><?php echo $fila[2];?></td>
                <td><?php echo $fila[3];?></td>
                <td><?php echo $fila[4];?></td>
                <td class="b"><button data-target="modal1" class="btn modal-trigger" id="ver_modal" onclick="editar('<?php echo $datos?>');">Cambiar</button></td>
            </tr>
        </tbody>

        <?php
            }
        ?>
    </table>

    </div>


<div id="modal1" class="modal">
  |<div class="modal-content">
  <div class="contents">
    <h5>Realizar cambios</h5>
</div>
        <form id="form_actualizar" method="post" class="ac" enctype="multipart/form-data">

                    <div class="input-field">
                        <input type="text" name="ids" value="" id="ids" placeholder="">           
                        <label for="ids">Id</label>
                    </div>

                    <div class="input-field">
                        <input type="text" name="anombre" value="" id="anombre" placeholder="">           
                        <label for="anombre">Nombre</label>
                    </div>

                    <div class="input-field">
                        <input type="text" name="acontenido" value="" id="acontenido" placeholder="">   
                        <label for="acontenido">Contenido</label>        
                    </div>

                    <div class="input-field">
                        <input type="text" name="aprecio" value="" id="aprecio" placeholder="">        
                        <label for="aprecio">Precio</label>    
                    </div>

                    <div class="input-field">
                        <input type="file" name="aimagen" value="" id="aimagen" placeholder="">      
                        <label for="aimagen">Imagen</label>    
                    </div>


                    <br>
                <div class="input-field">
                        <button type="submit" name="btn_actualizar" id="btn_actualizar" >Actualizar</button>
                        <button type="submit" name="btn_eliminar" id="btn_eliminar" >Eliminar</button>
                </div>

            </form>
  </div>

 
 </div>

<script src="js/jquery-3.5.1.js"></script>

<script>
    $(document).ready(function(){
        $("#btn_actualizar").on('click', function(e){
            e.preventDefault();
            actualizar_producto();
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#btn_eliminar").on('click', function(e){
            e.preventDefault();
            eliminar_producto();
        });
    });
</script>

<script src="js/jquery-3.5.1.js"></script>
    <script >
       $(()=>{
        $("#ham").click(()=>{
        $("nav").toggleClass("active");
        });
       });
        </script>


<script>
    $(document).ready(function(){
        M.AutoInt();
    });
</script>
<script>
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });


  $(document).ready(function(){
    $('.modal').modal();
  });
</script>
</body>
</html>