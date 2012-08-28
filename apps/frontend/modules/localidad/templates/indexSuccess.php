<h1>Localidads List</h1>

<table>
  <thead>
    <tr>
      <th>Id localidad</th>
      <th>Nombre localidad</th>
      <th>Codigo postal</th>
      <th>Provincia</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Localidads as $Localidad): ?>
    <tr>
      <td><a href="<?php echo url_for('localidad/edit?id_localidad='.$Localidad->getIdLocalidad()) ?>"><?php echo $Localidad->getIdLocalidad() ?></a></td>
      <td><?php echo $Localidad->getNombreLocalidad() ?></td>
      <td><?php echo $Localidad->getCodigoPostal() ?></td>
      <td><?php echo $Localidad->getProvinciaId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('localidad/new') ?>">New</a>
