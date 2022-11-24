$(document).on("click",".btnEditarRegistro",function(){
   
    
    let idPostulante = $(this).attr("idPostulante");
    
    let datos = new FormData();
    datos.append("idPostulante",idPostulante);
    
    $.ajax({
        url:"ajax/registro.ajax.php",
        method:"POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success:function(respuesta){
            $("#idPostulante").val(respuesta["id_postulante"]);
            $("#editarNombre").val(respuesta["nombre_completo"]);
            $("#editarFamilia").val(respuesta["familia"]);
            $("#editarIngreso").val(respuesta["posible_ingreso"]);
            $("#editarGrado").val(respuesta["grado_ingreso"]);
            $("#editarCelular").val(respuesta["celular"]);
            $("#editarCorreo").val(respuesta["correo"]);
            $("#editarCantidad").val(respuesta["cantidad_asistentes"]);
            $("#editarAsistenciaPostulante").val(respuesta["asistencia_postulante"]);

            

        }
    })
})