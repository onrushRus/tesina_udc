<h1>Personas</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id persona</th>
      <th>Estado</th>
      <th>Direccion postal</th>
      <th>Direccion real</th>
      <th>Cuit cuil</th>      
      <th>Acciones</th>
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
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('persona/edit?id_persona='.$Persona->getIdPersona()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'persona/delete?id_persona='.$Persona->getIdPersona(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Actividad?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('persona/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!-- <a href="<?php //echo url_for('persona/new') ?>">New</a> -->
