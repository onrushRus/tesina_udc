<h1>Provincias</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id provincia</th>
      <th>Nombre provincia</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Provincias as $Provincia): ?>
    <tr>
      <td><a href="<?php echo url_for('provincia/edit?id_provincia='.$Provincia->getIdProvincia()) ?>"><?php echo $Provincia->getIdProvincia() ?></a></td>
      <td><?php echo $Provincia->getNombreProvincia() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('provincia/edit?id_provincia='.$Provincia->getIdProvincia()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'provincia/delete?id_provincia='.$Provincia->getIdProvincia(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Actividad?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('provincia/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!-- <a href="<?php //echo url_for('provincia/new') ?>">New</a> -->
