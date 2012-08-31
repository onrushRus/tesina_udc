<h1>Situacion - Personas Juridicas</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id situacion pers juridica</th>
      <th>Situacion</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($SituacionPersonaJuridicas as $SituacionPersonaJuridica): ?>
    <tr>
      <td><a href="<?php echo url_for('situacionPersonaJuridica/edit?id_situacion_pers_juridica='.$SituacionPersonaJuridica->getIdSituacionPersJuridica()) ?>"><?php echo $SituacionPersonaJuridica->getIdSituacionPersJuridica() ?></a></td>
      <td><?php echo $SituacionPersonaJuridica->getSituacion() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('situacionPersonaJuridica/edit?id_situacion_pers_juridica='.$SituacionPersonaJuridica->getIdSituacionPersJuridica()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'situacionPersonaJuridica/delete?id_situacion_pers_juridica='.$SituacionPersonaJuridica->getIdSituacionPersJuridica(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Actividad?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('situacionPersonaJuridica/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!-- <a href="<?php //echo url_for('situacionPersonaJuridica/new') ?>">New</a> -->
