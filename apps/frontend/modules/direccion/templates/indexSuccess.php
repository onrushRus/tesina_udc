<h1 class="alert alert-heading" align="center">Dirección <?php if($Direccions->getCurrent()->getTipoDireccionId() == "1"){echo "Real";}else{echo "Postal";} ?></h1>
<hr>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <!-- <th>Id direccion</th> -->
      <th>Localidad</th>
      <th>Calle</th>
      <th>Numero</th>
      <th>Piso</th>
      <th>Departamento</th>
      <?php if (($sf_user->isAuthenticated()) && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
      <th>Acciones</th>
      <?php endif; ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Direccions as $Direccion): ?>
    <tr>
      <!-- <td><a href="<?php //echo url_for('direccion/edit?id_direccion='.$Direccion->getIdDireccion()) ?>"><?php //echo $Direccion->getIdDireccion() ?></a></td> -->
      <td><?php echo $Direccion->getLocalidad()->getNombreLocalidad() ?></td>
      <td><?php echo $Direccion->getCalle() ?></td>
      <td><?php echo $Direccion->getNumero() ?></td>
      <td><?php echo $Direccion->getPiso() ?></td>
      <td><?php echo $Direccion->getDepartamento() ?></td>
      <?php if (($sf_user->isAuthenticated()) && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('direccion/edit?id_direccion='.$Direccion->getIdDireccion()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php if (($sf_user->isAuthenticated()) && ($sf_user->hasCredential('1'))):?>
            <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'direccion/delete?id_direccion='.$Direccion->getIdDireccion(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Dirección?', 'class'=>"btn btn-danger btn-mini")) ?>
          <?php endif; ?>
      </td>
      <?php endif; ?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('personaJuridica/index?ente='.$Direccion->getPersonaJuridica()->getNombreFantasia()) ?>"><i class="icon-arrow-left icon-white"></i> Volver al Ente</a>
<!-- <a class="btn btn-success" href="<?php //echo url_for('direccion/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a> -->
<!-- <a href="<?php //echo url_for('direccion/new') ?>">New</a> -->
