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
        $stmt=Conexion::conectar()->prepare("UPDATE $tabla SET cantidad_asistentes = :asistentes, asistencia_postulante = :postulante, marca_asistencia= :marcaAsistencia  WHERE  id_postulante = :id");
        $stmt->bindParam(":asistentes",$datos["cantidad"],PDO::PARAM_INT);
        $stmt->bindParam(":postulante",$datos["asistencia"],PDO::PARAM_STR);
        $stmt->bindParam(":id",$datos["id_postulante"],PDO::PARAM_STR);
        $stmt->bindParam(":marcaAsistencia",$datos["marcaAsistencia"],PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt->close();
        $stmt=null;


    }
    static public function mdlIngresarRegistro($tabla,$datos){
        
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( familia, nombre_completo, residencia, posible_ingreso, grado_ingreso, celular, correo, responsable) 
        VALUES (:familia, :nombre, :residencia, :ingreso, :grado, :celular, :correo, :responsable)");
        
		$stmt->bindParam(":familia", $datos["familia"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":residencia", $datos["residencia"], PDO::PARAM_STR);
		$stmt->bindParam(":ingreso", $datos["ingreso"], PDO::PARAM_STR);
		$stmt->bindParam(":grado", $datos["grado"], PDO::PARAM_STR);
        $stmt->bindParam(":celular", $datos["celular"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":responsable", $datos["apoderado"], PDO::PARAM_STR);
		
        if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

    }
    static public function mdlEditarRegistro2($tabla,$datos){
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET familia=:familia, nombre_completo = :nombre, responsable = :responsable, posible_ingreso = :ingreso, grado_ingreso = :grado, celular = :celular, correo = :correo, cantidad_asistentes = :cantidad, asistencia_postulante=:postulante, residencia=:distrito WHERE id_postulante = :id");
        $stmt->bindParam(":id", $datos["idPostulante"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":familia", $datos["familia"], PDO::PARAM_STR);
		$stmt->bindParam(":responsable", $datos["responsable"], PDO::PARAM_STR);
        $stmt->bindParam(":distrito", $datos["distrito"], PDO::PARAM_STR);
		$stmt->bindParam(":ingreso", $datos["ingreso"], PDO::PARAM_STR);
		$stmt->bindParam(":grado", $datos["grado"], PDO::PARAM_STR);
        $stmt->bindParam(":celular", $datos["celular"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_INT);
		$stmt->bindParam(":postulante", $datos["postulante"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;
    }

    /*=============================================
	            BORRAR REGISTROS
	=============================================*/
    static public function mdlBorrarRegistros($tabla,$datos){
        $stmt=Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_postulante=:id");
        $stmt -> bindParam(":id",$datos,PDO::PARAM_INT);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt->close();
        $stmt=null;
    }

    static public function mdlCantidadAsistentesPorGrado($fecha,$grado){
        if($grado==null && $fecha==null){
            $stmt=Conexion::conectar()->prepare("SELECT * FROM registro_familias_postulantes WHERE marca_asistencia>0");
           
            $stmt->execute();
            return $stmt->fetchAll();

        }else{
            if($fecha==null){
                $stmt=Conexion::conectar()->prepare("SELECT * FROM registro_familias_postulantes WHERE grado_ingreso=:grado AND marca_asistencia>0");
                $stmt->bindParam(":grado",$grado,PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetchAll();
                
            }else if($grado==null){
                $stmt=Conexion::conectar()->prepare("SELECT * FROM registro_familias_postulantes WHERE posible_ingreso=:fecha AND marca_asistencia>0");
                $stmt->bindParam(":fecha",$fecha,PDO::PARAM_STR);
                
                $stmt->execute();
                return $stmt->fetchAll();

            }else{
                $stmt=Conexion::conectar()->prepare("SELECT * FROM registro_familias_postulantes WHERE posible_ingreso=:fecha AND grado_ingreso=:grado AND marca_asistencia>0");
                $stmt->bindParam(":fecha",$fecha,PDO::PARAM_STR);
                $stmt->bindParam(":grado",$grado,PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetchAll();
    
            }
        }
        
        $stmt->close();
        $stmt=null;

    }
}