<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Usuarios</title>
    </head>
    <body>
        <h2>Agregar Usuario</h2>
        <?php
        //Si existen las sesiones flasdata que se muestren
            if($this->session->flashdata('correcto'))
                echo $this->session->flashdata('correcto');
             
            if($this->session->flashdata('incorrecto'))
                echo $this->session->flashdata('incorrecto');
        ?>
<table border="1">
    <tr>
        <form action="<?=base_url("usuarios_controller/add");?>" method="post">
            <div class="row">
				<div class="col-sm-4 col-12 mb-4">
                    <td>
                        <label for="">Identificación</label>
                        <input type="text" name="indentificacion"/>
                    </td>
                </div>
				<div class="col-sm-4 col-12 mb-4">
                    <td>
                        <label for="">Primer Nombre</label>
                        <input type="text" name="pnombre"/>
                    </td>
                </div>
				<div class="col-sm-4 col-12 mb-4">
                    <td>
                        <label for="">Segundo Nombre</label>
                        <input type="text" name="snombre"/>
                    </td>
                </div>
            </div>
            <div class="row">
				<div class="col-sm-4 col-12 mb-4">
                    <td>
                        <label for="">Primer Apellido</label>
                        <input type="text" name="papellido"/>
                    </td>
				<div class="col-sm-4 col-12 mb-4">
                    <td>
                        <label for="">Segundo Apellido</label>
                        <input type="email" name="sapellido"/>
                    </td>
                </div>
				<div class="col-sm-4 col-12 mb-4">
                    <td>
                        <label for="">Email</label>
                        <input type="email" name="email"/>
                    </td>
                </div>
            </div>
            <div class="row">
				<div class="col-sm-4 col-12 mb-4">
                    <td>
                        <label for="">Celular</label>
                        <input type="text" name="celular"/>
                    </td>
                </div>
				<div class="col-sm-4 col-12 mb-4">
                    <td>
                        <label for="">Fecha Ingreso</label>
                        <input type="date" name="fecha_ingreso"/>
                    </td>
                </div>
				<div class="col-sm-4 col-12 mb-4">
                    <td>
                        <label for="">Tipo</label>
                        <input type="text" name="tipo"/>
                    </td>
                </div>
            </div>
            <div class="row">
				<div class="col-sm-3 col-12 mb-3">
                    <td>
                        <label for="">Nombre Sede</label>
                        <input type="text" name="nombresede"/>
                    </td>
                </div>
				<div class="col-sm-3 col-12 mb-3">
                    <td>
                        <label for="">Contraseña</label>
                        <input type="password" name="contrasena"/>
                    </td>
                </div>
				<div class="col-sm-3 col-12 mb-3">
                    <td>
                        <label for="">Estado</label>
                        <input type="text" name="estado"/>
                    </td>
				<div class="col-sm-3 col-12 mb-3">
                    <td>
                        <label for="">Añadir</label>
                        <input type="submit" name="submit" value="Añadir" />
                    </td>
                </div>
            </div>
        </form>
    </tr>
<!-- <?php
foreach($ver as $fila){
?>
    <tr>
        <td>
            <?=$fila->identificacion;?>
        </td>
        <td>
            <?=$fila->pnombre;?>
        </td>
        <td>
            <?=$fila->snombre;?>
        </td>
        <td>
            <?=$fila->papellido;?>
        </td>
        <td>
            <?=$fila->sapellido;?>
        </td>
        <td>
            <?=$fila->email;?>
        </td>
        <td>
            <?=$fila->celular;?>
        </td>
        <td>
            <?=$fila->fecha_ingreso;?>
        </td>
        <td>
            <?=$fila->tipo;?>
        </td>
        <td>
            <?=$fila->nombresede;?>
        </td>
        <td>
            <?=$fila->contrasena;?>
        </td>
        <td>
            <?=$fila->estado;?>
        </td>        
        <td>
            <a href="<?=base_url("usuarios_controller/mod/$fila->identificacion")?>">Modificar</a>
            <a href="<?=base_url("usuarios_controller/eliminar/$fila->identificacion")?>">Eliminar</a>
        </td>
    </tr>
<?php
    
}
?> -->
</table>
    </body>
</html>