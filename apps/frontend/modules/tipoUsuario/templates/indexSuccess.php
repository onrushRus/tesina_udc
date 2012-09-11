<h1>TipoUsuarios List</h1>

<table>
  <thead>
    <tr>
      <th>Id tipo usuario</th>
      <th>Tipo usuario</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($TipoUsuarios as $TipoUsuario): ?>
    <tr>
      <td><a href="<?php echo url_for('tipoUsuario/edit?id_tipo_usuario='.$TipoUsuario->getIdTipoUsuario()) ?>"><?php echo $TipoUsuario->getIdTipoUsuario() ?></a></td>
      <td><?php echo $TipoUsuario->getTipoUsuario() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipoUsuario/new') ?>">New</a>
