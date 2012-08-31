<h1>Direcciones</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id direccion</th>
      <th>Localidad</th>
      <th>Calle</th>
      <th>Numero</th>
      <th>Piso</th>
      <th>Departamento</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Direccions as $Direccion): ?>
    <tr>
      <td><a href="<?php echo url_for('direccion/edit?id_direccion='.$Direccion->getIdDireccion()) ?>"><?php echo $Direccion->getIdDireccion() ?></a></td>
      <td><?php echo $Direccion->getLocalidadId() ?></td>
      <td><?php echo $Direccion->getCalle() ?></td>
      <td><?php echo $Direccion->getNumero() ?></td>
      <td><?php echo $Direccion->getPiso() ?></td>
      <td><?php echo $Direccion->getDepartamento() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('direccion/edit?id_direccion='.$Direccion->getIdDireccion()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'direccion/delete?id_direccion='.$Direccion->getIdDireccion(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Actividad?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('direccion/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!-- <a href="<?php //echo url_for('direccion/new') ?>">New</a> -->
