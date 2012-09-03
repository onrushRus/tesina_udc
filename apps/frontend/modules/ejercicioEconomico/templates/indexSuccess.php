<h1>Ejercicios Economicos</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id ejercicio economico</th>
      <th>Persona juridica</th>
      <th>Fecha inicio</th>
      <th>Fecha fin</th>
      <th>Presidente</th>
      <th>Secretario</th>
      <th>Tesorero</th>
      <th>Sindico</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($EjercicioEconomicos as $EjercicioEconomico): ?>
    <tr>
      <td><a href="<?php echo url_for('ejercicioEconomico/edit?id_ejercicio_economico='.$EjercicioEconomico->getIdEjercicioEconomico()) ?>"><?php echo $EjercicioEconomico->getIdEjercicioEconomico() ?></a></td>
      <td><?php echo $EjercicioEconomico->getPersonaJuridicaId() ?></td>
      <td><?php echo $EjercicioEconomico->getFechaInicio() ?></td>
      <td><?php echo $EjercicioEconomico->getFechaFin() ?></td>
      <td><?php echo $EjercicioEconomico->getPresidente() ?></td>
      <td><?php echo $EjercicioEconomico->getSecretario() ?></td>
      <td><?php echo $EjercicioEconomico->getTesorero() ?></td>
      <td><?php echo $EjercicioEconomico->getSindico() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('ejercicioEconomico/edit?id_ejercicio_economico='.$EjercicioEconomico->getIdEjercicioEconomico()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'ejercicioEconomico/delete?id_ejercicio_economico='.$EjercicioEconomico->getIdEjercicioEconomico(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el Ejercicio Económico?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('ejercicioEconomico/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!-- <a href="<?php //echo url_for('ejercicioEconomico/new') ?>">New</a> -->
