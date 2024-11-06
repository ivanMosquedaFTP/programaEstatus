<?php
require_once ('egresado.class.php');
$app = new egresado();

$accion = (isset($_GET['accion']))?$_GET['accion'] : NULL;
// $id = (isset($_GET['no_control']))?$_GET['no_control']:null;
switch ($accion) {
    case 'capturar': {
        include 'views/egresado/capturar.php';
        break;
    }

    case 'nuevo': {
        $data=$_POST['data'];
        $resultado = $app->create($data);
        if ($resultado) {
            echo('Solicitud de titulacion creada con exito');
            $mensaje = "Solicitud del egresado aspirante a titulacion dado de alta correctamente";
            $tipo = "success";
        } else {
            echo('Solicitud de titulacion no creada');
            $mensaje = "La solicitud del egresado aspirante a titulacion no ha sido dado de alta";
            $tipo = "danger";
        }

        $egresados = $app->readAll();
        // include('views/egresado/index.php');
        break;
    }

    case 'actualizar': {
        include('views/egresado/modificar.php');
        break;
    }
    
    case 'modificar': {
        $data= $_POST['data'];
        if (!is_null($data['no_control']) && is_numeric($data['no_control'])) {
            $result=$app->update($data);

            if($result){
                echo('Solicitud de titulacion modificada con exito');
                $mensaje="La solicitud del egresado aspirante a titulacion se ha actualizado";
                $tipo="success";
            }else{
                echo('La solicitud de titulacion no fue modificada');
                $mensaje="La solicitud del egresado aspirante a titulacion no se ha actualizado";
                $tipo="danger";
            }
        }

        $egresados = $app->readAll();
        // include('views/egresado/index.php');
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