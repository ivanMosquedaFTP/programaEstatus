<?php
require_once ('egresado.class.php');
$app = new egresado();

$accion = (isset($_GET['accion']))?$_GET['accion'] : NULL;
switch ($accion) {
    case 'capturar': {
        include 'views/egresado/capturar.php';
        break;
    }

    case 'nuevo': {
        $data=$_POST['data'];
        $resultado = $app->create($data);
        if ($resultado) {
            echo('creado con exito');
            $mensaje = "Solicitud del egresado aspirante a titulacion dado de alta correctamente";
            $tipo = "success";
        } else {
            $mensaje = "La solicitud del egresado aspirante a titulacion no ha sido dado de alta";
            $tipo = "danger";
        }

        $egresados = $app->readAll();
        include('views/egresado/index.php');
        break;
    }

    case 'actualizar': {
        $egresados = $app -> readOne($id); 
        include('views/egresado/crear.php');
        break;
    }
    
    case 'modificar': {
        $data= $_POST['data'];
        $result=$app->update($id,$data);
        if($result){
            $mensaje="La solicitud del egresado aspirante a titulacion se ha actualizado";
            $tipo="success";
        }else{
            $mensaje="La solicitud del egresado aspirante a titulacion no se ha actualizado";
            $tipo="danger";
        }
        $egresados = $app->readAll();
        include('views/egresado/index.php');
        break;
    }

    case 'eliminar': {
        if (!is_null($id)) {
            if (is_numeric($id)) {
                $resultado = $app -> delete($id);
                if ($resultado) {
                    $mensaje = "La solicitud del egresado aspirante a titulacion se elimino correctamente";
                    $tipo = "success";
                } else {
                    $mensaje = "La solicitud del egresado aspirante a titulacion no se elimino correctamente";
                    $tipo = "danger";
                }
            }
        }
        $egresados = $app->readAll();
        include('views/egresado/index.php');
        break;
    }

    default: {
        $egresados = $app->readAll();
        include 'views/egresado/index.php';
        break;
    }
}
?>