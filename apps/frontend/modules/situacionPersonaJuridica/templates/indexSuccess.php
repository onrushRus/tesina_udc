<h1 class="alert alert-heading" align="center">Situacion de Entes</h1>
<hr>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Situación</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($SituacionPersonaJuridicas as $SituacionPersonaJuridica): ?>
    <tr>
      <td><?php echo $SituacionPersonaJuridica->getSituacion() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('situacionPersonaJuridica/edit?id_situacion_pers_juridica='.$SituacionPersonaJuridica->getIdSituacionPersJuridica()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'situacionPersonaJuridica/delete?id_situacion_pers_juridica='.$SituacionPersonaJuridica->getIdSituacionPersJuridica(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Situación de Persona Juridica?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<hr>
<a class="btn btn-info" href="<?php echo url_for('situacionPersonaJuridica/new') ?>"><i class="icon-plus-sign icon-white"></i> Nueva Situación</a>
