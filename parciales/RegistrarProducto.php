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

        .leta{
            font-size: 20px;
        }

        
        .ac{
            display:flex;
            justify-content:center;
            
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
    <h1>Soda Line</h1>
    <h2>Refrescate</h2>
</section>
<!-----<div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
        style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: #fff;"></path>
    </svg></div>-->
</header>

<div class="contents">
    <h5>Registrar Producto</h5>
</div>
    
<div class="row" id="tabla">

    <div class="col 14">
    <form id="form_agregar" method="post" class="ag" enctype="multipart/form-data" name="form_agregar" >
       
         <div class="top-form">
                        <div class="inner-form">
                          <div class="label" for="nombre" >Nombre</div>
                          <input type="text" name="nombre" value="" id="nombre" placeholder="" required>      
                        </div>
                        <div class="inner-form">
                          <div class="label" for="contenido">Contenido</div>
                          <input type="text" name="contenido" value="" id="contenido" placeholder="" required>     
                        </div>
                    
                      </div>
                      <br>
                      <div class="top-form">
                            <div class="inner-form">
                              <div class="label" for="precio">Precio</div>
                              <input type="text" name="precio" value="" id="precio" placeholder="" required>     
                            </div>
                            <div class="inner-form">
                              <div  for="imagen">Imagen</div>
                              <input type="file" name="imagen" value="" id="imagen" placeholder="" required>     
                            </div>
                          
                          </div>   
            <br>
           <br>
        <div class="input-field">
                <button type="submit" name="btn_agregar" id="btn_agregar" value="UPLOAD" >Agregar</button>

        </div>

    </form>
    </div>


  
</div>

<footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4 class="leta">Telefono</h4>
                <span class="fas fa-phone-alt"></span>
                <p>2613484</p>
            </div>
            <div class="content-foo">
                <h4 class="leta">E-mail</h4>
                <span class="fas fa-envelope"></span>
                <p>sodaline@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4 class="leta">Casa Matriz</h4>
                <span class="fas fa-map-marker-alt"></span>
                <p>Dir. Av. 6 de julio #2103</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; SODA LINE</h2>
    </footer>


<script src="../js/jquery-3.5.1.js"></script>

<script>
    $(document).ready(function(){
        $("#btn_agregar").on('click', function(e){
            e.preventDefault();
            agregar_producto();
        });
    });
</script>


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