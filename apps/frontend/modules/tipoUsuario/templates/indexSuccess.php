<h1 class="alert alert-heading" align="center">Tipos de Usuarios</h1>
<hr>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Tipo usuario</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($TipoUsuarios as $TipoUsuario): ?>
    <tr>
      <td><?php echo $TipoUsuario->getTipoUsuario() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('tipoUsuario/edit?id_tipo_usuario='.$TipoUsuario->getIdTipoUsuario()) ?>"><i class="icon-pencil icon-white"></i> Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i> Eliminar', 'tipoUsuario/delete?id_tipo_usuario='.$TipoUsuario->getIdTipoUsuario(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el tipo de usuario?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<hr>
<a class="btn btn-info" href="<?php echo url_for('tipoUsuario/new') ?>"><i class="icon-plus-sign icon-white"></i> Nuevo Tipo de Usuario</a>
