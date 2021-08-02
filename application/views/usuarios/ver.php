<table class="table table-responsive" style="background-color: #FFFFFF;">
    <thead>
        <tr>
            <th> Identificación </th>
            <th> Contraseña </th>
            <th> Primer Nombre </th>
            <th> Segundo Nombre </th>
            <th> Primer Apellido </th>
            <th> Segundo Apellido </th>
            <th> Email </th>
            <th> Celular </th>
            <th> Fecha ingreso </th>
            <th> Tipo </th>
            <th> Estado </th>
            <th> Nombre Sede </th>
            <th> &nbsp; </th>
        </tr>
    </thead>
    <tbody>    
        <tr>
            <td> <?php echo $usuario->identificacion ?> </td>
            <td> <?php echo $usuario->contrasena ?> </td>
            <td> <?php echo $usuario->pnombre ?> </td>
            <td> <?php echo $usuario->snombre ?> </td>
            <td> <?php echo $usuario->papellido ?> </td>
            <td> <?php echo $usuario->sapellido ?> </td>
            <td> <?php echo $usuario->email ?> </td>
            <td> <?php echo $usuario->celular ?> </td>
            <td> <?php echo $usuario->fecha_ingreso ?> </td>
            <td> <?php echo $usuario->tipo ?> </td>
            <td> <?php echo $usuario->estado ?> </td>
            <td> <?php echo $usuario->nombresede ?> </td>
        </tr>
    </tbody>
    <div> <a class="btn btn-info" href="<?php echo base_url() ?>index.php/usuarios/index"> Volver atrás </a> </div>
</table>