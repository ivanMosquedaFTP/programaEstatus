<?php
 require_once ('../sistema.class.php');

 class egresado extends sistema {
    function create ($data){
        $result = [];
        $insertar = [];
        $this -> conexion();
        $sql="insert into egresado(no_control, nombre_completo, especialidad, nombre_proyecto, opc_titulacion, status, fecha_examen, asesor, sinodal1, sinodal2, sinodal3) values(:no_control, :nombre_completo, :especialidad, :nombre_proyecto, :opc_titulacion, :status, :fecha_examen, :asesor, :sinodal1, :sinodal2, :sinodal3);";
        $insertar = $this->con->prepare($sql);
        $insertar -> bindParam(':no_control', $data['no_control'], PDO::PARAM_STR);
        $insertar -> bindParam(':nombre_completo', $data['nombre_completo'], PDO::PARAM_STR);
        $insertar -> bindParam(':especialidad', $data['especialidad'], PDO::PARAM_STR);
        $insertar -> bindParam(':nombre_proyecto', $data['nombre_proyecto'], PDO::PARAM_STR);
        $insertar -> bindParam(':opc_titulacion', $data['opc_titulacion'], PDO::PARAM_STR);
        $insertar -> bindParam(':status', $data['status'], PDO::PARAM_INT);
        $insertar -> bindParam(':fecha_examen', $data['fecha_examen'], PDO::PARAM_STR);
        $insertar -> bindParam(':asesor', $data['asesor'], PDO::PARAM_STR);
        $insertar -> bindParam(':sinodal1', $data['sinodal1'], PDO::PARAM_STR);
        $insertar -> bindParam(':sinodal2', $data['sinodal2'], PDO::PARAM_STR);
        $insertar -> bindParam(':sinodal3', $data['sinodal3'], PDO::PARAM_STR);
        $insertar -> execute();
        $result = $insertar -> rowCount();
        return $result;
    }

    function update ($id, $data){
        $this->conexion();
        $result = [];
        $sql = 'update egresado set no_control=:no_control, nombre_completo=:nombre_completo, especialidad=:especialidad, nombre_proyecto=:nombre_proyecto, opc_titulacion=:opc_titulacion, status=:status, fecha_examen=:fecha_examen, asesor=:asesor, sinodal1=:sinodal1, sinodal2=:sinodal2, sinodal3=:sinodal3 where id_solicitud=:id_solicitud;';
        $modificar=$this->con->prepare($sql);
        $modificar->bindParam(':no_control',$data['nombre_completo'], PDO::PARAM_STR);
        $modificar->bindParam(':nombre_completo',$data['nombre_completo'], PDO::PARAM_STR);
        $modificar->bindParam(':especialidad',$data['especialidad'], PDO::PARAM_STR);
        $modificar->bindParam(':nombre_proyecto',$data['nombre_proyecto'], PDO::PARAM_STR);
        $modificar->bindParam(':opc_titulacion',$data['opc_titulacion'], PDO::PARAM_STR);
        $modificar->bindParam(':status',$data['status'], PDO::PARAM_INT);
        $modificar->bindParam(':fecha_examen',$data['fecha_examen'], PDO::PARAM_STR);
        $modificar->bindParam(':asesor',$data['asesor'], PDO::PARAM_STR);
        $modificar->bindParam(':sinodal1',$data['sinodal1'], PDO::PARAM_STR);
        $modificar->bindParam(':sinodal2',$data['sinodal2'], PDO::PARAM_STR);
        $modificar->bindParam(':sinodal3',$data['sinodal3'], PDO::PARAM_STR);
        $modificar->bindParam(':id_solicitud',$id, PDO::PARAM_INT);
        $modificar->execute();
        $result= $modificar->rowCount();
        return $result;
    }

    function delete ($id){
        $this -> conexion();
        $result = [];
        $sql = "delete from egresado where id_solicitud=:id_solicitud;";
        $eliminar = $this->con->prepare($sql);
        $eliminar -> bindParam(':id_solicitud', $id, PDO::PARAM_INT);
        $eliminar -> execute();
        $result = $eliminar -> rowCount();
        return $result;
    }

    function readOne ($id){
        $this->conexion();
        $result = [];
        $consulta = 'SELECT * FROM egresado where id_especialidad=:id_especialidad;';
        $sql = $this->con->prepare($consulta);
        $sql->bindParam(":id_especialidad",$id,PDO::PARAM_INT);
        $sql -> execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function readAll (){
        $this -> conexion();
        $result = [];
        $consulta ='select * from egresado';
        $sql = $this->con->prepare ($consulta); 
        $sql -> execute();
        $result = $sql -> fetchALL(PDO::FETCH_ASSOC);    
        return $result;
    }
 }
?>