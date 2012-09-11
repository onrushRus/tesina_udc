<h1>PuestoComisionDirectivas List</h1>

<table>
  <thead>
    <tr>
      <th>Id puesto comision directiva</th>
      <th>Puesto</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($PuestoComisionDirectivas as $PuestoComisionDirectiva): ?>
    <tr>
      <td><a href="<?php echo url_for('puestoComisionDirectiva/edit?id_puesto_comision_directiva='.$PuestoComisionDirectiva->getIdPuestoComisionDirectiva()) ?>"><?php echo $PuestoComisionDirectiva->getIdPuestoComisionDirectiva() ?></a></td>
      <td><?php echo $PuestoComisionDirectiva->getPuesto() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('puestoComisionDirectiva/new') ?>">New</a>
