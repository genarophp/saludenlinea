<form method="post" action="<?php echo base_url() ?>index.php/usuarios/guardar_post/<?php echo $id ?>">

   <div class="row">
      <div class="col-sm-3 col-12 mb-3">
         <div class="mb-3">
            <label class="form-label"> Identificación <b style="color: #E67F03">(*)</b></label>
            <input type="text" class="form-control" name="identificacion" required="required" value="<?php echo $identificacion ?>" placeholder="Número sin puntos ni guiones"/>
         </div>
      </div>
      <div class="col-sm-3 col-12 mb-3">
         <div class="mb-3">
            <label class="form-label"> Contraseña <b style="color: #E67F03">(*)</b></label>
            <input class="form-control" type="password" name="contrasena" value="<?php echo $contrasena ?>" />
         </div>
      </div>
      <div class="col-sm-3 col-12 mb-3">
         <div class="mb-3">
            <label class="form-label"> Primer Nombre <b style="color: #E67F03">(*)</b></label>
            <input type="text" class="form-control" name="pnombre" required="required" value="<?php echo $pnombre; ?>" />
         </div>
      </div>
      <div class="col-sm-3 col-12 mb-3">
         <div class="mb-3">
            <label class="form-label"> Segundo Nombre </label>
            <input type="text" class="form-control" name="snombre" value="<?php echo $snombre; ?>" />
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col-sm-3 col-12 mb-3">
         <label class="form-label"> Primer Apellido <b style="color: #E67F03">(*)</b></label>
         <input type="text" class="form-control" name="papellido" required="required" value="<?php echo $papellido; ?>" />
      </div>
      <div class="col-sm-3 col-12 mb-3">
         <label class="form-label"> Segundo Apellido </label>
         <input type="text" class="form-control" name="sapellido" value="<?php echo $sapellido; ?>" />
      </div>
      <div class="col-sm-3 col-12 mb-3">
         <label class="form-label"> Email <b style="color: #E67F03">(*)</b></label>
         <input type="email" class="form-control" name="email" required="required" value="<?php echo $email; ?>" />
      </div>
      <div class="col-sm-3 col-12 mb-3">
         <label class="form-label"> Celular </label>
         <input type="text" class="form-control" name="celular" value="<?php echo $celular; ?>" />
      </div>
   </div>

   <div class="row">
      <div class="col-sm-3 col-12 mb-3">
         <label class="form-label"> Fecha ingreso </label>
         <input type="date" class="form-control" name="fecha_ingreso" value="<?php echo $fecha_ingreso; ?>" />
      </div>
      <div class="col-sm-3 col-12 mb-3">
         <label class="form-label">Tipo</label>
         <select class="form-control" id="estado" name="tipo">
            <option value="Prestador" selected>Prestador</option>
            <option value="admin">Administrador</option>																											
         </select>
      </div>
      <div class="col-sm-3 col-12 mb-3">
         <label class="form-label"> Estado </label>
         <select class="form-control" id="estado" name="estado">
            <option value="ACTIVO">ACTIVO</option>
            <option value="INACTIVO">INACTIVO</option>																											
         </select>
      </div>
      <div class="col-sm-3 col-12 mb-3">
         <label class="form-label"> Nombre Sede </label>
         <input type="text" class="form-control" name="nombresede" value="<?php echo $nombresede; ?>" />
      </div>
   </div>
      <div class="row">
         <input type="submit" class="btn btn-success" value="Guardar" />
         <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/validadordeservicios/view"> Cancelar </a>
      </div>
</form>

<?php if (validation_errors()): ?>
   <div class="alert alert-error">
      <?php echo validation_errors(); ?>
   </div>
<?php endif; ?>