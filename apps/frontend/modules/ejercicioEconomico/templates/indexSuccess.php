<h1>EjercicioEconomicos List</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id ejercicio economico</th>
      <th>Persona juridica</th>
      <th>Fecha fin ejercicio economico</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($EjercicioEconomicos as $EjercicioEconomico): ?>
    <tr>
      <td><a href="<?php echo url_for('ejercicioEconomico/edit?id_ejercicio_economico='.$EjercicioEconomico->getIdEjercicioEconomico()) ?>"><?php echo $EjercicioEconomico->getIdEjercicioEconomico() ?></a></td>
      <td><?php echo $EjercicioEconomico->getPersonaJuridicaId() ?></td>
      <td><?php echo $EjercicioEconomico->getFechaFinEjercicioEconomico() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('ejercicioEconomico/new') ?>">New</a>
