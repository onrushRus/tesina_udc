<h1 class="alert alert-heading" align="center">Lista de Localidades</h1>
<hr>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Nombre localidad</th>
      <th>Codigo postal</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Localidads as $Localidad): ?>
    <tr>
      <td><?php echo $Localidad->getNombreLocalidad() ?></td>
      <td><?php echo $Localidad->getCodigoPostal() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('localidad/edit?id_localidad='.$Localidad->getIdLocalidad()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'localidad/delete?id_localidad='.$Localidad->getIdLocalidad(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Localidad?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<hr>
<a class="btn btn-info" href="<?php echo url_for('localidad/new') ?>"><i class="icon-plus-sign icon-white"></i> Agregar Localidad</a>
