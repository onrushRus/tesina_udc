<h1>Estados de Personas</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id estado persona</th>
      <th>Estado</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($EstadoPersonas as $EstadoPersona): ?>
    <tr>
      <td><a href="<?php echo url_for('estadoPersona/edit?id_estado_persona='.$EstadoPersona->getIdEstadoPersona()) ?>"><?php echo $EstadoPersona->getIdEstadoPersona() ?></a></td>
      <td><?php echo $EstadoPersona->getEstado() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('estadoPersona/edit?id_estado_persona='.$EstadoPersona->getIdEstadoPersona()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'estadoPersona/delete?id_estado_persona='.$EstadoPersona->getIdEstadoPersona(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Actividad?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('estadoPersona/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!-- <a href="<?php //echo url_for('estadoPersona/new') ?>">New</a> -->
