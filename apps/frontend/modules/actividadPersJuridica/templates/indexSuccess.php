<h1>Actividad - Pers. Juridicas</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Actividad</th>
      <th>Persona juridica</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ActividadPersJuridicas as $ActividadPersJuridica): ?>
    <tr>
      <td><a href="<?php echo url_for('actividadPersJuridica/edit?actividad_id='.$ActividadPersJuridica->getActividadId().'&persona_juridica_id='.$ActividadPersJuridica->getPersonaJuridicaId()) ?>"><?php echo $ActividadPersJuridica->getActividadId() ?></a></td>
      <td><a href="<?php echo url_for('actividadPersJuridica/edit?actividad_id='.$ActividadPersJuridica->getActividadId().'&persona_juridica_id='.$ActividadPersJuridica->getPersonaJuridicaId()) ?>"><?php echo $ActividadPersJuridica->getPersonaJuridicaId() ?></a></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('actividadPersJuridica/edit?actividad_id='.$ActividadPersJuridica->getActividadId()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'actividadPersJuridica/delete?actividad_id='.$ActividadPersJuridica->getActividadId(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la combinación Actividad - Pers. Juridica?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('actividadPersJuridica/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!--  <a href="<?php echo url_for('actividadPersJuridica/new') ?>">New</a> -->
