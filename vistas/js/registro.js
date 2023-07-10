/*---------------------------------------
            EDITAR REGISTRO
    ---------------------------------------- */
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
            $("#editarFamilia").val(respuesta["familia"]);
            $("#editarNombre").val(respuesta["nombre_completo"]);
            $("#editarApoderado").val(respuesta["responsable"]);

            $("#editarDistrito").html(respuesta["residencia"]);
            $("#editarDistrito").val(respuesta["residencia"]);

            $("#editarIngreso").html(respuesta["posible_ingreso"]);
            $("#editarIngreso").val(respuesta["posible_ingreso"]);
            $("#editarGrado").html(respuesta["grado_ingreso"]);
            $("#editarGrado").val(respuesta["grado_ingreso"]);
            $("#editarCelular").val(respuesta["celular"]);
            $("#editarCorreo").val(respuesta["correo"]);
            $("#editarCantidad").val(respuesta["cantidad_asistentes"]);
            $("#editarAsistenciaPostulante").html(respuesta["asistencia_postulante"]);
            $("#editarAsistenciaPostulante").val(respuesta["asistencia_postulante"]);

            

        }
    })
})



/*---------------------------------------
            ELIMINAR REGISTRO
    ---------------------------------------- */

    $(document).on("click",".btnEliminarRegistro",function(){
        
        let idRegistro = $(this).attr("idPostulante");
        swal({
            title:"¿ Está seguro que desea borrar el registro ?",
            text:"! Si no esta segur@ puede cancelar la acción ¡",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Si, borrar registro'
        }).then(function(result){
            if(result.value){
                window.location = "index.php?ruta=registros&idRegistro="+idRegistro;
            }
        })
    })


/*=============================================
IMPRIMIR REPORTE
=============================================*/

$(".tablas").on("click",".btnImprimirCodigoQr", function(){
    let datosFamilia=$(this).attr("datosFamilia");
	
	window.open("extensiones/tcpdf/pdf/codigoQR.php?dataFamilia="+datosFamilia,"_blank");
})

