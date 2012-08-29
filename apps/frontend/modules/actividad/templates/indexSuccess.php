<h1>Actividades</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id actividad</th>
      <th>Actividad</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Actividads as $Actividad): ?>
    <tr>
      <td><a href="<?php echo url_for('actividad/edit?id_actividad='.$Actividad->getIdActividad()) ?>"><?php echo $Actividad->getIdActividad() ?></a></td>
      <td><?php echo $Actividad->getActividad() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('actividad/edit?id_actividad='.$Actividad->getIdActividad()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'actividad/delete?id_actividad='.$Actividad->getIdActividad(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Actividad?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('actividad/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!--  <a class="btn btn-info" href="<?php //echo url_for('actividad/new') ?>">Nueva Actividad</a> -->
