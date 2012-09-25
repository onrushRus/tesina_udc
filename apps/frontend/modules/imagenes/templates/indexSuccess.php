<?php /*@var $Imagenes $Imageness*/ ?>
<h1>Imagenes</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Descripcion</th>
      <th>Imagen</th>
      <?php if($sf_user->isAuthenticated()):?>
      <th>Acciones</th>
      <?php endif;?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Imageness as $Imagenes): ?>
    <tr>
      <td><?php echo $Imagenes->getDescripcion() ?></td>
      <!--<td><?php //echo $Imagenes->getNombreArchivo() ?></td>-->
          <td><img src="<?php echo image_path('../uploads/imagenes_personas_juridicas/'.$Imagenes->getNombreArchivo())?>" alt="imagen coop-mut" width="200px" heigth="200px"></td>
      <?php if($sf_user->isAuthenticated()):?>
      <td>          
            <a class="btn btn-warning btn-mini" href="<?php echo url_for('imagenes/edit?id_imagenes='.$Imagenes->getIdImagenes()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
            <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'imagenes/delete?id_imagenes='.$Imagenes->getIdImagenes(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Imagen?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
      <?php endif;?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('personaJuridica/index?ente='.$Imagenes->getPersonaJuridica()->getNombreFantasia()) ?>"><i class="icon-arrow-left icon-white"></i> Volver al Ente</a>
<?php if($sf_user->isAuthenticated()):?>
    <a class="btn btn-info" href="<?php echo url_for('imagenes/new?ente='.$Imagenes->getPersonaJuridicaIdPersonaJuridica()) ?>"><i class="icon-fire icon-white"></i>Agregar Imagen</a>
<?php endif;?>
