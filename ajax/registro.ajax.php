<?php


require_once "../controladores/registros.controlador.php";
require_once "../modelos/registros.modelo.php";

class AjaxRegistros{

    public $idPostulante;

    public function ajaxEditarRegistro(){
        $item="id_postulante";
        $valor=$this->idPostulante;
        $respuesta=ControladorRegistros::ctrMostrarRegistros($item,$valor);
        
        echo json_encode($respuesta);


    }
}


if(isset($_POST["idPostulante"])){
    
	$registro = new AjaxRegistros();
	$registro -> idPostulante = $_POST["idPostulante"];
	$registro -> ajaxEditarRegistro();
}