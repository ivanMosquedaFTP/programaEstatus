<?php
 require_once ('../sistema.class.php');

 class empleado extends sistema {
    function create ($data){
        $result = [];
        $insertar = [];
        $this -> conexion();
        $sql="insert into empleado(primer_apellido, segundo_apellido, nombre, rfc, id_usuario) values(:primer_apellido, :segundo_apellido, :nombre, :rfc, :id_usuario);";
        $insertar = $this->con->prepare($sql);
        $insertar -> bindParam(':primer_apellido', $data['primer_apellido'], PDO::PARAM_STR);
        $insertar -> bindParam(':segundo_apellido', $data['segundo_apellido'], PDO::PARAM_STR);
        $insertar -> bindParam(':nombre', $data['nombre'], PDO::PARAM_STR);
        $insertar -> bindParam(':rfc', $data['rfc'], PDO::PARAM_STR);
        $insertar -> bindParam(':id_usuario', $data['id_usuario'], PDO::PARAM_INT);
        $insertar -> execute();
        $result = $insertar -> rowCount();
        return $result;
    }

    function update ($id, $data){
        $this->conexion();
        $result = [];
        $sql = 'update empleado set primer_apellido=:primer_apellido, segundo_apellido=:segundo_apellido, nombre=:nombre, rfc=:rfc, id_usuario=:id_usuario where id_empleado=:id_empleado;';
        $modificar=$this->con->prepare($sql);
        $modificar -> bindParam(':primer_apellido', $data['primer_apellido'], PDO::PARAM_STR);
        $modificar -> bindParam(':segundo_apellido', $data['segundo_apellido'], PDO::PARAM_STR);
        $modificar -> bindParam(':nombre', $data['nombre'], PDO::PARAM_STR);
        $modificar -> bindParam(':rfc', $data['rfc'], PDO::PARAM_STR);
        $modificar -> bindParam(':id_usuario', $data['id_usuario'], PDO::PARAM_INT);
        $modificar -> bindParam(':id_empleado', $id, PDO::PARAM_INT);
        $modificar->execute();
        $result= $modificar->rowCount();
        return $result;
    }

    function delete ($id){
        $this -> conexion();
        $result = [];
        if (is_numeric($id)) {
            $sql = "delete from empleado where id_empleado=:id_empleado;";
            $eliminar = $this->con->prepare($sql);
            $eliminar -> bindParam(':id_empleado', $id, PDO::PARAM_INT);
            $eliminar -> execute();
            $result = $eliminar -> rowCount();
        }
        return $result;
    }

    function readOne ($id){
        $this->conexion();
        $result = [];
        $consulta = 'SELECT * FROM empleado where id_empleado=:id_empleado;';
        $sql = $this->con->prepare($consulta);
        $sql->bindParam(":id_empleado",$id,PDO::PARAM_INT);
        $sql -> execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function readAll (){
        $this -> conexion();
        $result = [];
        $consulta ='select e.*, u.correo from empleado e join usuario u on e.id_usuario = u.id_usuario;';
        $sql = $this->con->prepare ($consulta); 
        $sql -> execute();
        $result = $sql -> fetchALL(PDO::FETCH_ASSOC);    
        return $result;
    }
 }
?>