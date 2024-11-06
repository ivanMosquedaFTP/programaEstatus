<?php require('views/header.php');?>
<center>
    <h1><?php if($accion=="crear"):echo('Nuevo');else: echo ('Modificar');endif; ?> egresado</h1>
</center>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form method="post" action="egresado.php?accion=<?php if($accion=="crear"):echo('nuevo');else:echo('modificar&id='.$id);endif;?>">

        <div class="mb-3">
            <label for="no_control" class="form-label">Numero de control del egresado</label>
            <input class="form-control" type="text" name="data[no_control]" placeholder="Escribe aquí el numero de control" value="<?php if(isset($egresados["no_control"])):echo($egresados['no_control']);endif;?>" id="no_control"/>
        </div>

        <div class="mb-3">
            <label for="nombre_completo" class="form-label">Nombre del egresado</label>
            <input class="form-control" type="text" name="data[nombre_completo]" placeholder="Escribe aquí el nombre completo" value="<?php if(isset($egresados["nombre_completo"])):echo($egresados['nombre_completo']);endif;?>" id="nombre_completo"/>
        </div>

        <div class="mb-3">
            <label for="especialidad" class="form-label">Especialidad del egresado</label>
            <input class="form-control" type="text" name="data[especialidad]" placeholder="Escribe aquí la especialidad del egresado"  value="<?php if(isset($egresados["especialidad"])):echo($egresados['especialidad']);endif;?>"  id="especialidad"/>
        </div>

        <div class="mb-3">
            <label for="nombre_proyecto" class="form-label">Nombre del proyecto del egresado</label>
            <input class="form-control" type="text" name="data[nombre_proyecto]" placeholder="Escribe aquí el nombre del proyecto del egresado"  value="<?php if(isset($egresados["nombre_proyecto"])):echo($egresados['nombre_proyecto']);endif;?>"  id="nombre_proyecto"/>
        </div>

        <div class="mb-3">
            <label for="opc_titulacion" class="form-label">Opcion de titulacion del egresado</label>
            <input class="form-control" type="text" name="data[opc_titulacion]" placeholder="Escribe aquí la opcion de titulacion del egresado" value="<?php if(isset($egresados["opc_titulacion"])):echo($egresados['opc_titulacion']);endif;?>" id="opc_titulacion"/>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status del egresado</label>
            <input class="form-control" id="status" type="number" name="data[status]" placeholder="Escribe aquí el status del egresado" value="<?php if(isset($egresados["status"])):echo($egresados['status']);endif;?>"/>
        </div>

        <div class="mb-3">
            <label class="form-label" for="fecha">Fecha del examen</label>
            <input class="form-control" id="fecha" type="date" name="data[fecha_examen]"  value="<?php if(isset($egresados["fecha_examen"])):echo($egresados['fecha_examen']);endif;?>"/>
        </div>

        <div class="mb-3">
            <label for="asesor" class="form-label">Asesor del egresado</label>
            <input class="form-control" id="status" type="number" name="data[asesor]" placeholder="Escribe aquí el nombre del asesor del egresado" value="<?php if(isset($egresados["asesor"])):echo($egresados['asesor']);endif;?>"/>
        </div>

        <div class="mb-3">
            <label for="sinodal1" class="form-label">Sinodal 1</label>
            <input class="form-control" id="sinodal1" type="number" name="data[sinodal1]" placeholder="Escribe aquí el nombre del sinodal 1" value="<?php if(isset($egresados["sinodal1"])):echo($egresados['sinodal1']);endif;?>"/>
        </div>

        <div class="mb-3">
            <label for="sinodal2" class="form-label">Sinodal 2</label>
            <input class="form-control" id="sinodal2" type="number" name="data[sinodal2]" placeholder="Escribe aquí el nombre del sinodal 2" value="<?php if(isset($egresados["sinodal2"])):echo($egresados['sinodal2']);endif;?>"/>
        </div>

        <div class="mb-3">
            <label for="sinodal3" class="form-label">Sinodal 3</label>
            <input class="form-control" id="sinodal3" type="number" name="data[sinodal3]" placeholder="Escribe aquí el nombre del sinodal 3" value="<?php if(isset($egresados["sinodal3"])):echo($egresados['sinodal3']);endif;?>"/>
        </div>

        <input type="submit" value="Guardar" name="data[enviar]" class="btn btn-primary w-100">
        </form>
    </div>
    <div class="col-md-1"></div>
</div>
<?php require('views/footer_home.php');?>