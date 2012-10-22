<h1 class="alert alert-heading" align="center">Tipos de Asambleas</h1>
<hr>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Tipo asamblea</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($TipoAsambleas as $TipoAsamblea): ?>
    <tr>
      <td><?php echo $TipoAsamblea->getTipoAsamblea() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('tipoAsamblea/edit?id_tipo_asamblea='.$TipoAsamblea->getIdTipoAsamblea()) ?>"><i class="icon-pencil icon-white"></i> Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i> Eliminar', 'tipoAsamblea/delete?id_tipo_asamblea='.$TipoAsamblea->getIdTipoAsamblea(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el tipo de asamblea?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<hr>
<a class="btn btn-info" href="<?php echo url_for('tipoAsamblea/new') ?>"><i class="icon-plus-sign icon-white"></i> Nuevo Tipo de Asamblea</a>
