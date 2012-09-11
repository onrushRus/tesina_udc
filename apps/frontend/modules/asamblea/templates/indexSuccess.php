<h1>Asambleas List</h1>

<table>
  <thead>
    <tr>
      <th>Id asamblea</th>
      <th>Ejercicio economico</th>
      <th>Tipo asamblea</th>
      <th>Observaciones</th>
      <th>Fecha asamblea</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Asambleas as $Asamblea): ?>
    <tr>
      <td><a href="<?php echo url_for('asamblea/edit?id_asamblea='.$Asamblea->getIdAsamblea().'&ejercicio_economico_id='.$Asamblea->getEjercicioEconomicoId()) ?>"><?php echo $Asamblea->getIdAsamblea() ?></a></td>
      <td><a href="<?php echo url_for('asamblea/edit?id_asamblea='.$Asamblea->getIdAsamblea().'&ejercicio_economico_id='.$Asamblea->getEjercicioEconomicoId()) ?>"><?php echo $Asamblea->getEjercicioEconomicoId() ?></a></td>
      <td><?php echo $Asamblea->getTipoAsambleaId() ?></td>
      <td><?php echo $Asamblea->getObservaciones() ?></td>
      <td><?php echo $Asamblea->getFechaAsamblea() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('asamblea/new') ?>">New</a>
