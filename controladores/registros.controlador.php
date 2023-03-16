<?php
class ControladorRegistros{
    static public function ctrMostrarRegistros($item,$valor){
        $tabla="registro_familias_postulantes";
        $respuesta=ModeloRegistros::mdlMostrarRegistros($tabla,$item,$valor);
        return $respuesta;
        
    }
    static public function ctrEditarRegistros(){
       
        
        if(isset($_POST["id_pos"])){
            
            $tabla="registro_familias_postulantes";
            $datos=array("id_postulante"=>$_POST["id_pos"],"cantidad"=>$_POST["editarCantidad1"],"asistencia"=>$_POST["editarPostulante1"],"marcaAsistencia"=>$_POST["campoAsistenciaFamilia"]);
            $respuesta=ModeloRegistros::mdlEditarRegistros($tabla,$datos);
            if($respuesta== "ok"){
                echo'<script>

                swal({
                    type: "success",
                    title: "La categoria ha sido modificada correctamente",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                    }).then(function(result){
                                if (result.value) {

                                window.location = "inicio";

                                }
                            })

                </script>';
            }


        }
    }

    static public function ctrCrearRegistro(){
        if(isset($_POST["nuevoNombre"])){
            if(preg_match('/^[a-zA-Z0-9 ]+$/',$_POST["nuevoNombre"])&&
            preg_match('/^[a-zA-Z0-9 ]+$/',$_POST["nuevaFamilia"])&&
            preg_match('/^[a-zA-Z0-9]+$/',$_POST["nuevoIngreso"])&&
            preg_match('/^[a-zA-Z0-9]+$/',$_POST["nuevoGrado"])&&
            preg_match('/^[a-zA-Z0-9]+$/',$_POST["nuevoCelular"]&&
            preg_match('/^[a-zA-Z0-9]+$/',$_POST["nuevaCantidad"])
            )){
                $tabla = "registro_familias_postulantes";
                
                $datos=array("nombre"=>$_POST["nuevoNombre"],
                        "familia"=>$_POST["nuevaFamilia"],
                        "ingreso"=>$_POST["nuevoIngreso"],
                        "grado"=>$_POST["nuevoGrado"],
                        "celular"=>$_POST["nuevoCelular"],
                        "correo"=>$_POST["nuevoCorreo"],
                        "cantidad"=>$_POST["nuevaCantidad"],
                        "postulante"=>$_POST["nuevaAsistenciaPostulante"]);
                $respuesta=ModeloRegistros::mdlIngresarRegistro($tabla,$datos);
                var_dump($datos);
                if($respuesta== "ok"){
                    echo'<script>

                    swal({
                        type: "success",
                        title: "La categoria ha sido guardada correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                                    if (result.value) {

                                    window.location = "registros";

                                    }
                                })

                    </script>';
                }

            }else{
                echo'<script>

				swal({
					  type: "error",
					  title: "!La categoria no puede ir vacia o llevar caracteres especiales¡",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
                      closeOnConfirm: false
					  }).then(function(result){
								if (result.value) {

								window.location = "categorias";

								}
							})

				</script>';
            }
        }
    }

     static public function ctrEditarRegistro2(){
         if(isset($_POST["editarNombre"])){
             if(preg_match('/^[a-zA-Z0-9 ]+$/',$_POST["editarNombre"])&&
             preg_match('/^[a-zA-Z0-9 ]+$/',$_POST["editarFamilia"])&&
             preg_match('/^[a-zA-Z0-9]+$/',$_POST["editarIngreso"])&&
             preg_match('/^[a-zA-Z0-9]+$/',$_POST["editarGrado"])&&
             preg_match('/^[a-zA-Z0-9]+$/',$_POST["editarCelular"]&&
             preg_match('/^[a-zA-Z0-9]+$/',$_POST["editarCantidad"])
             )){
                 $tabla = "registro_familias_postulantes";
                 $datos=array(
                         "idPostulante"=>$_POST["idPostulante"],
                         "nombre"=>$_POST["editarNombre"],
                         "familia"=>$_POST["editarFamilia"],
                         "ingreso"=>$_POST["editarIngreso"],
                         "grado"=>$_POST["editarGrado"],
                         "celular"=>$_POST["editarCelular"],
                         "correo"=>$_POST["editarCorreo"],
                         "cantidad"=>$_POST["editarCantidad"],
                         "postulante"=>$_POST["editarAsistenciaPostulante"]);
                 $respuesta=ModeloRegistros::mdlEditarRegistro2($tabla,$datos);
                 if($respuesta== "ok"){
                     echo'<script>

                     swal({
                         type: "success",
                         title: "La categoria ha sido modificada correctamente",
                         showConfirmButton: true,
                         confirmButtonText: "Cerrar"
                         }).then(function(result){
                                     if (result.value) {

                                     window.location = "registros";

                                     }
                                 })

                     </script>';
                 }

             }else{
                 echo'<script>

	 			swal({
	 				  type: "error",
	 				  title: "!Los campos no pueden ir vacios o llevar caracteres especiales¡",
	 				  showConfirmButton: true,
	 				  confirmButtonText: "Cerrar",
                       closeOnConfirm: false
	 				  }).then(function(result){
	 							if (result.value) {

	 							window.location = "registros";

	 							}
	 						})

	 			</script>';
             }
         }
     }

    /*=============================================
	            BORRAR REGISTROS
	=============================================*/
    static public function ctrBorrarRegistro(){
        if(isset($_GET["idRegistro"])){
            $tabla="registro_familias_postulantes";
            $datos=$_GET["idRegistro"];

            $respuesta=ModeloRegistros::mdlBorrarRegistros($tabla,$datos);
            if($respuesta=="ok"){
                echo'<script>

				swal({
					  type: "success",
					  title: "La categoria ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "registros";

								}
							})

				</script>';
            }

        }

    }
    /*======================================================================================
	            CONSULTA PARA MOSTRAR EL REPORTE POR GRADO Y AÑO SI VIENE POR POST
	========================================================================================*/
    static public function mostrarCantidadAsistentesPorGrado($grado){
        
        if(isset($_POST["fechaReporte"])){
            if($_POST["fechaReporte"]=="2022"|| $_POST["fechaReporte"]=="2023" || $_POST["fechaReporte"]!="2024" || $_POST["fechaReporte"]!="2025"){
                $fecha=$_POST["fechaReporte"];
                $respuesta=ModeloRegistros::mdlCantidadAsistentesPorGrado($fecha,$grado);
            }else{
                $fecha=null;
                $respuesta=ModeloRegistros::mdlCantidadAsistentesPorGrado($fecha,$grado);
            }
        }else{
            $fecha=null;
            $respuesta=ModeloRegistros::mdlCantidadAsistentesPorGrado($fecha,$grado);
        }
        return $respuesta;
    }
    /*======================================================================================
	            CONSULTA PARA MOSTRAR EL TOTAL ASISTENCIAS
	========================================================================================*/
    static public function mostratTotalAsistencias(){
        $fecha=null;
        $grado=null;
        $respuesta=ModeloRegistros::mdlCantidadAsistentesPorGrado($fecha,$grado);
        return $respuesta;
    }
    /*==================================================================================================
	            CONSULTA PARA MOSTRAR EL REPORTE POR GRADO Y AÑO INDEPENDIENTEMENTE PARA EL REPORTE PDF
	====================================================================================================*/
    static public function mostrarCantidadParaReportePdf($fecha,$grado){
        // var_dump($grado);
        // var_dump($fecha);
        // return ;
        if($grado !=null && $fecha!=null){
            $respuesta=ModeloRegistros::mdlCantidadAsistentesPorGrado($fecha,$grado);

        }else{
            if($grado!=null){
                
                $respuesta=ModeloRegistros::mdlCantidadAsistentesPorGrado(null,$grado);
            }else if($fecha!=null){
                
                $respuesta=ModeloRegistros::mdlCantidadAsistentesPorGrado($fecha,null);

            }
        }
        return $respuesta;
    }
}