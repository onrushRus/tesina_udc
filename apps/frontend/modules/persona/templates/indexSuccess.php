<h1>Personas List</h1>

<table>
  <thead>
    <tr>
      <th>Id persona</th>
      <th>Estado</th>
      <th>Direccion postal</th>
      <th>Direccion real</th>
      <th>Cuit cuil</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Personas as $Persona): ?>
    <tr>
      <td><a href="<?php echo url_for('persona/edit?id_persona='.$Persona->getIdPersona()) ?>"><?php echo $Persona->getIdPersona() ?></a></td>
      <td><?php echo $Persona->getEstadoId() ?></td>
      <td><?php echo $Persona->getDireccionPostalId() ?></td>
      <td><?php echo $Persona->getDireccionRealId() ?></td>
      <td><?php echo $Persona->getCuitCuil() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('persona/new') ?>">New</a>
