<h1>Provincias List</h1>

<table>
  <thead>
    <tr>
      <th>Id provincia</th>
      <th>Nombre provincia</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Provincias as $Provincia): ?>
    <tr>
      <td><a href="<?php echo url_for('provincia/edit?id_provincia='.$Provincia->getIdProvincia()) ?>"><?php echo $Provincia->getIdProvincia() ?></a></td>
      <td><?php echo $Provincia->getNombreProvincia() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('provincia/new') ?>">New</a>
