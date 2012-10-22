<h1 class="alert alert-heading" align="center">Lista de Provincias</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Nombre provincia</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Provincias as $Provincia): ?>
    <tr>
      <td><?php echo $Provincia->getNombreProvincia() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('provincia/edit?id_provincia='.$Provincia->getIdProvincia()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'provincia/delete?id_provincia='.$Provincia->getIdProvincia(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Provincia?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<hr>
<a class="btn btn-info" href="<?php echo url_for('provincia/new') ?>"><i class="icon-plus-sign icon-white"></i> Agregar Provincia</a>

