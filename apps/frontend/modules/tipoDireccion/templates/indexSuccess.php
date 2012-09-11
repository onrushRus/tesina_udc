<h1>TipoDireccions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($TipoDireccions as $TipoDireccion): ?>
    <tr>
      <td><a href="<?php echo url_for('tipoDireccion/edit?id='.$TipoDireccion->getId()) ?>"><?php echo $TipoDireccion->getId() ?></a></td>
      <td><?php echo $TipoDireccion->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipoDireccion/new') ?>">New</a>
