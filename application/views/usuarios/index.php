

<p> <a class="btn btn-success" href="<?php echo base_url() ?>index.php/usuarios/guardar"> Crear nuevo usuario </a> </p>
<?php if (count($usuarios)): ?>
<br>
<?php if($flag == 0): ?>
<?php else: ?>
    <?php if($flag == 1 or $flag == 2): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>¡Éxito! &nbsp</strong> <?php if($flag == 1 ): ?> El usuario se guardó correctamente<?php endif; ?>
      <?php if($flag == 2 ): ?> El usuario se eliminó correctamente<?php endif; ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <?php endif; ?>
<?php endif; ?>
<br>

<table class="table tableborder" style="background-color: #FFFFFF;" id="table_id">
    <thead>
    <tr>
        <th>Identificación</th>
        <!-- <th> Contraseña </th> -->
        <th>Primer Nombre</th>
        <!-- <th> Segundo Nombre </th> -->
        <th>Primer Apellido</th>
        <!-- <th> Segundo Apellido </th> -->
        <th>Email</th>
        <!-- <th> Celular </th> -->
        <!-- <th> Fecha ingreso </th> -->
        <!-- <th> Tipo </th> -->
        <th>Estado</th>
        <th>Nombre Sed</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($usuarios as $item): ?>
        <tr>
            <td> <?php echo $item->identificacion ?> </td>
            <!-- <td> <?php echo $item->contrasena ?> </td> -->
            <td> <?php echo $item->pnombre ?> </td>
            <!-- <td> <?php echo $item->snombre ?> </td> -->
            <td> <?php echo $item->papellido ?> </td>
            <!-- <td> <?php echo $item->sapellido ?> </td> -->
            <td> <?php echo $item->email ?> </td>
            <!-- <td> <?php echo $item->celular ?> </td> -->
            <!-- <td> <?php echo $item->fecha_ingreso ?> </td> -->
            <!-- <td> <?php echo $item->tipo ?> </td> -->
            <td> <?php echo $item->estado ?> </td>
            <td> <?php echo $item->nombresede ?> </td>
            <td> 
                <a class="btn btn-info" href="<?php echo base_url() ?>index.php/usuarios/ver/<?php echo $item->id ?>"> Ver </a>
            </td>
            <td> 
                <a class="btn btn-info" href="<?php echo base_url() ?>index.php/usuarios/guardar/<?php echo $item->id ?>"> Editar </a>
            </td>
            <td> 
                <a class="btn btn-danger eliminar_usuario" href="<?php echo base_url() ?>index.php/usuarios/eliminar/<?php echo $item->id ?>"> Eliminar </a> 
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<p> No hay Usuarios </p>
<?php endif; ?>

<!-- <script type="text/javascript">

    $(".eliminar_usuario").each(function() {
        var href = $(this).attr('href');
        $(this).attr('href', 'javascript:void(0)');
        $(this).click(function() {
            if (confirm("¿Seguro desea eliminar este usuario?")) {
                location.href = href;
            }
        });
    });
</script> -->

        