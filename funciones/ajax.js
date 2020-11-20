
function agregar_producto(){
    var datos = new FormData($("#form_agregar")[0]);

    $.ajax({
        data: datos,
        url: "../parciales/crear.php",
        type: "POST",
        contentType: false,
        processData: false,
        beforesend: function(){

        },
        success: function(e){
           
                alert("Agregado exitosamente");
       
        }
    });
}

function editar(datos){
    d = datos.split('||');
    $("#ids").val(d[0]);
    $("#anombre").val(d[1]);
    $("#acontenido").val(d[2]);
    $("#aprecio").val(d[3]);
    $("#aimagen").val(d[4]);
}


function actualizar_producto(){
    var datos = new FormData($("#form_actualizar")[0]);

    $.ajax({
        data: datos,
        url: "../parciales/actualizar.php",
        type: "POST",
        contentType: false,
        processData: false,
        beforesend: function(){

        },
        success: function(e){
            
                alert("Actualizado exitosamente");
            
        }
    });
}

/*function actualizar_producto(){
    var datos = $("#form_actualizar").serialize();

    $.ajax({
        method:"POST", url: "../parciales/actualizar.php", data: datos, success: function(e){
            if(e==1){
                alert("Actualizado exitosamente");
                $("#table").load('../parciales/index.php');
            }
            else{
                alert("Error de actualización");
            }
        }
      });

      return false;
}*/

function eliminar_producto(){
    var datos=$("#form_actualizar").serialize();
   
    $.ajax({

        method:"POST", url: "../parciales/eliminar.php",data: datos, success: function(e){

            if(e==1){
                alert("Eliminado exitosamente");
                $("#table").load('../parciales/index.php');
            }

            else{
                alert("Error al eliminar");
            }
        }
    });

    return false;

}
