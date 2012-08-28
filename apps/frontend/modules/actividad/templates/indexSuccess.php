<h1>Actividads List</h1>

<table>
  <thead>
    <tr>
      <th>Id actividad</th>
      <th>Actividad</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Actividads as $Actividad): ?>
    <tr>
      <td><a href="<?php echo url_for('actividad/edit?id_actividad='.$Actividad->getIdActividad()) ?>"><?php echo $Actividad->getIdActividad() ?></a></td>
      <td><?php echo $Actividad->getActividad() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('actividad/new') ?>">New</a>
