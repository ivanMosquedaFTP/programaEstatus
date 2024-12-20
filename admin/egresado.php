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
        include('views/footer_home.php');
        break;
    }

    case 'premodificacion': {
        include('views/egresado/validar.php');
        break;
    }

    case 'validar': {
        $data= $_POST['data'];
        // print_r($data);
        // die();
        if (!is_null($data['no_control']) && is_numeric($data['no_control'])) {
            $result=$app->validate($data['no_control']);

            if($result){
                $mensaje="El egresado ha sido encontrado, procediendo";
                $tipo="success";
                $egresados = $app->readOne($data['no_control']);
                include("views/egresado/modificar.php");
            }else{
                echo('El egresado aspirante a titulacion no ha sido encontrado');
                $mensaje="El egresado aspirante a titulacion no ha sido encontrado, imposible continuar";
                $tipo="danger";
            }
        }

        break;
    }

    case 'preconsulta': {
        include('views/egresado/validarParaConsulta.php');
        break;
    }

    case 'consultaPorStatus': {
        $data= $_POST['data'];
        // echo'<pre />';
        // print_r($data);
        // die();
        if (!is_null($data['status']) && is_numeric($data['status']) && $data['status'] <= 6) {
            $result=$app->validateStatus($data['status']);

        // echo'<pre />';
        // print_r($result);
        // die();

            if($result){
                $mensaje="El status ha sido encontrado, procediendo";
                $tipo="success";
                $egresados = $app->readAllForStatusQuery($data['status']);
        // echo'<pre />';
        // print_r($egresados);
        // die();
                include("views/egresado/consultarPorStatus.php");
            }else{
                echo("No hay ningun egresado aspirante a titulacion con el status ".$data['status'].", imposible continuar");
                include('views/footer_home.php');
                $mensaje="El status no ha sido encontrado, imposible continuar";
                $tipo="danger";
            }
        }

        break;
    }

    case 'actualizar': {
        include('views/egresado/modificar.php');
        break;
    }
    
    case 'modificar': {
        $data= $_POST['data'];
        // echo('<pre/>');
        // print_r($data);
        // die();
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
        include('views/footer_home.php');
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