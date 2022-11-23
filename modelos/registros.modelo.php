<?php

require_once "conexion.php";
class ModeloRegistros{
    static public function mdlMostrarRegistros($tabla,$item,$valor){
        if($item!=null){
            $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:$item");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        }
        else{
            $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt->execute();

            return $stmt->fetchAll();
        }
        $stmt->close();
        $stmt=null;
    }
    static public function mdlEditarRegistros($tabla,$datos){
        $stmt=Conexion::conectar()->prepare("UPDATE $tabla SET cantidad_asistentes = :asistentes, asistencia_postulante = :postulante WHERE  id_postulante = :id");
        $stmt->bindParam(":asistentes",$datos["cantidad"],PDO::PARAM_INT);
        $stmt->bindParam(":postulante",$datos["asistencia"],PDO::PARAM_STR);
        $stmt->bindParam(":id",$datos["id_postulante"],PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt->close();
        $stmt=null;


    }
    static public function mdlIngresarRegistro($tabla,$datos){
        var_dump($datos);
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( nombre_completo, familia, posible_ingreso, grado_ingreso, celular, correo, cantidad_asistentes, asistencia_postulante) 
        VALUES (:nombre, :familia, :ingreso, :grado, :celular, :correo, :cantidad, :postulante)");
        
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":familia", $datos["familia"], PDO::PARAM_STR);
		$stmt->bindParam(":ingreso", $datos["ingreso"], PDO::PARAM_STR);
		$stmt->bindParam(":grado", $datos["grado"], PDO::PARAM_STR);
        $stmt->bindParam(":celular", $datos["celular"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
		$stmt->bindParam(":postulante", $datos["postulante"], PDO::PARAM_STR);
        if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

    }
}