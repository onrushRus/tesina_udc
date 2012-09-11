<h1>TipoAsambleas List</h1>

<table>
  <thead>
    <tr>
      <th>Id tipo asamblea</th>
      <th>Tipo asamblea</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($TipoAsambleas as $TipoAsamblea): ?>
    <tr>
      <td><a href="<?php echo url_for('tipoAsamblea/edit?id_tipo_asamblea='.$TipoAsamblea->getIdTipoAsamblea()) ?>"><?php echo $TipoAsamblea->getIdTipoAsamblea() ?></a></td>
      <td><?php echo $TipoAsamblea->getTipoAsamblea() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipoAsamblea/new') ?>">New</a>
