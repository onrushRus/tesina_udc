<h1>Localidades</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id localidad</th>
      <th>Nombre localidad</th>
      <th>Codigo postal</th>
      <th>Provincia</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Localidads as $Localidad): ?>
    <tr>
      <td><a href="<?php echo url_for('localidad/edit?id_localidad='.$Localidad->getIdLocalidad()) ?>"><?php echo $Localidad->getIdLocalidad() ?></a></td>
      <td><?php echo $Localidad->getNombreLocalidad() ?></td>
      <td><?php echo $Localidad->getCodigoPostal() ?></td>
      <td><?php echo $Localidad->getProvinciaId() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('localidad/edit?id_localidad='.$Localidad->getIdLocalidad()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'localidad/delete?id_localidad='.$Localidad->getIdLocalidad(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Localidad?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('localidad/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!-- <a href="<?php //echo url_for('localidad/new') ?>">New</a> -->
