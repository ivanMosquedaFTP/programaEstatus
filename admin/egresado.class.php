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

        $espec = "";
        if (!is_null($data['especialidad']) && $data['especialidad'] == 1) {
            $espec = "IINFO";
        } else if (!is_null($data['especialidad']) && $data['especialidad'] == 2) {
            $espec = "LINFO";
        } else if (!is_null($data['especialidad']) && $data['especialidad'] == 3) {
            $espec = "ISC";
        }

        $insertar -> bindParam(':especialidad', $espec, PDO::PARAM_STR);

        $insertar -> bindParam(':nombre_proyecto', $data['nombre_proyecto'], PDO::PARAM_STR);

        $opc = "";
        if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 1) {
            $opc = "I";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 2) {
            $opc = "II";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 3) {
            $opc = "III";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 4) {
            $opc = "IV";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 5) {
            $opc = "V";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 6) {
            $opc = "VI";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 7) {
            $opc = "VII";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 8) {
            $opc = "VIII";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 9) {
            $opc = "IX";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 10) {
            $opc = "X";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 11) {
            $opc = "XIa";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 12) {
            $opc = "XIb";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 13) {
            $opc = "XIc";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 14) {
            $opc = "XId";
        }

        $insertar -> bindParam(':opc_titulacion', $opc, PDO::PARAM_STR);

        $stat = "";
        if (!is_null($data['status']) && $data['status'] == 1) {
            $stat = "1";
        } else if (!is_null($data['status']) && $data['status'] == 2) {
            $stat = "2";
        } else if (!is_null($data['status']) && $data['status'] == 3) {
            $stat = "3";
        } else if (!is_null($data['status']) && $data['status'] == 4) {
            $stat = "4";
        } else if (!is_null($data['status']) && $data['status'] == 5) {
            $stat = "5";
        } else if (!is_null($data['status']) && $data['status'] == 6) {
            $stat = "6";
        }

        $insertar -> bindParam(':status', $stat, PDO::PARAM_INT);

        $fecha_examen = ($data['status'] >= 3) ? $data['fecha_examen'] : null;
        $insertar -> bindParam(':fecha_examen', $fecha_examen, PDO::PARAM_STR);
        $insertar -> bindParam(':asesor', $data['asesor'], PDO::PARAM_STR);
        $insertar -> bindParam(':sinodal1', $data['sinodal1'], PDO::PARAM_STR);
        $insertar -> bindParam(':sinodal2', $data['sinodal2'], PDO::PARAM_STR);
        $insertar -> bindParam(':sinodal3', $data['sinodal3'], PDO::PARAM_STR);
        $insertar -> execute();
        $result = $insertar -> rowCount();
        return $result;
    }

    function update ($data){
        $this->conexion();
        $result = [];
        $sql = 'update egresado set nombre_completo=:nombre_completo, especialidad=:especialidad, nombre_proyecto=:nombre_proyecto, opc_titulacion=:opc_titulacion, status=:status, fecha_examen=:fecha_examen, asesor=:asesor, sinodal1=:sinodal1, sinodal2=:sinodal2, sinodal3=:sinodal3 where no_control=:no_control;';
        $modificar=$this->con->prepare($sql);
        $modificar -> bindParam(':nombre_completo', $data['nombre_completo'], PDO::PARAM_STR);
    
        $espec = "";
        if (!is_null($data['especialidad']) && $data['especialidad'] == 1) {
            $espec = "IINFO";
        } else if (!is_null($data['especialidad']) && $data['especialidad'] == 2) {
            $espec = "LINFO";
        } else if (!is_null($data['especialidad']) && $data['especialidad'] == 3) {
            $espec = "ISC";
        }
    
        $modificar -> bindParam(':especialidad', $espec, PDO::PARAM_STR);
    
        $modificar -> bindParam(':nombre_proyecto', $data['nombre_proyecto'], PDO::PARAM_STR);
    
        $opc = "";
        if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 1) {
            $opc = "I";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 2) {
            $opc = "II";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 3) {
            $opc = "III";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 4) {
            $opc = "IV";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 5) {
            $opc = "V";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 6) {
            $opc = "VI";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 7) {
            $opc = "VII";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 8) {
            $opc = "VIII";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 9) {
            $opc = "IX";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 10) {
            $opc = "X";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 11) {
            $opc = "XIa";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 12) {
            $opc = "XIb";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 13) {
            $opc = "XIc";
        } else if (!is_null($data['opc_titulacion']) && $data['opc_titulacion'] == 14) {
            $opc = "XId";
        }
    
        $modificar -> bindParam(':opc_titulacion', $opc, PDO::PARAM_STR);
    
        $stat = "";
        if (!is_null($data['status']) && $data['status'] == 1) {
            $stat = "1";
        } else if (!is_null($data['status']) && $data['status'] == 2) {
            $stat = "2";
        } else if (!is_null($data['status']) && $data['status'] == 3) {
            $stat = "3";
        } else if (!is_null($data['status']) && $data['status'] == 4) {
            $stat = "4";
        } else if (!is_null($data['status']) && $data['status'] == 5) {
            $stat = "5";
        } else if (!is_null($data['status']) && $data['status'] == 6) {
            $stat = "6";
        }
    
        $modificar -> bindParam(':status', $stat, PDO::PARAM_INT);
    
        // Implement logic for 'fecha_examen' based on 'status'
        if ($stat <= 2) {
            $fechaExam = null; // Clear the date if status is <= 2
        } else {
            $fechaExam = (!is_null($data['fecha_examen'])) ? $data['fecha_examen'] : "00-00-00";
        }
    
        $modificar -> bindValue(':fecha_examen', $fechaExam, is_null($fechaExam) ? PDO::PARAM_NULL : PDO::PARAM_STR);
    
        $modificar -> bindParam(':asesor', $data['asesor'], PDO::PARAM_STR);
        $modificar -> bindParam(':sinodal1', $data['sinodal1'], PDO::PARAM_STR);
        $modificar -> bindParam(':sinodal2', $data['sinodal2'], PDO::PARAM_STR);
        $modificar -> bindParam(':sinodal3', $data['sinodal3'], PDO::PARAM_STR);
        $modificar -> bindParam(':no_control', $data['no_control'], PDO::PARAM_STR);
        $modificar->execute();
        $result = $modificar->rowCount();
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
        $consulta = 'SELECT * FROM egresado where no_control=:no_control;';
        $sql = $this->con->prepare($consulta);
        $sql->bindParam(":no_control",$id,PDO::PARAM_INT);
        $sql -> execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function validate($id) {
        // echo"deteniendo la app antes del if";
        // print_r($id);
        // die();
        if (!is_null($id) && is_numeric($id)) {
            $this->conexion();
            $result = [];
            $consulta = 'SELECT * FROM egresado where no_control=:no_control';
            $sql = $this->con->prepare($consulta);
            $sql->bindParam(":no_control",$id,PDO::PARAM_INT);
            $sql -> execute();

            $result = $sql->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        return false;
    }

    function validateStatus($status) {
        if (!is_null($status) && is_numeric($status)) {
            $this->conexion();
            $result = [];
            $consulta = 'SELECT status FROM egresado where status=:status';
            $sql = $this->con->prepare($consulta);
            $sql->bindParam(":status",$status,PDO::PARAM_INT);
            $sql -> execute();

            $result = $sql->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        return false;
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

    function readAllForStatusQuery ($status){
        $this -> conexion();
        $result = [];
        $consulta ='select * from egresado where status=:status';
        $sql = $this->con->prepare ($consulta); 
        $sql->bindParam(":status",$status,PDO::PARAM_INT);
        $sql -> execute();
        $result = $sql -> fetchALL(PDO::FETCH_ASSOC);    
        return $result;
    }
 }
?>