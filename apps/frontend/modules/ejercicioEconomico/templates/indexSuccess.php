<h1 class="alert-heading"><?php echo $ente->getNombreFantasia() ?></h1>
<h3>Lista de Ejercicios Economicos</h3>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Nro. de Ejercicio Económico</th>
      <th>Fin Ejercicio Económico</th>
      <th>Consejo de Administración</th>
      <th>Asamblea</th>
      <?php if($sf_user->isAuthenticated()):?>
        <th>Acciones</th>
      <?php endif;?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($EjercicioEconomicos as $EjercicioEconomico): ?>
    <tr>
      <!--<td><a href="<?php //echo url_for('ejercicioEconomico/edit?id_ejercicio_economico='.$EjercicioEconomico->getIdEjercicioEconomico()) ?>"><?php //echo $EjercicioEconomico->getIdEjercicioEconomico() ?></a></td>
      <td><?php //echo $EjercicioEconomico->getPersonaJuridicaId() ?></td> -->
      <td><?php echo $EjercicioEconomico->getNumeroEjercicioEconomico() ?></td>
      <td><?php echo $EjercicioEconomico->getFechaFinEjercicioEconomico('d-m-Y') ?></td>
      <td>
         <a class="btn btn-success btn-mini" href="<?php echo url_for('personaComisionDirectiva/index?ente='.$ente->getIdPersonaJuridica().'&ejerEcon='.$EjercicioEconomico->getIdEjercicioEconomico()) ?>"><i class="icon-search icon-white"></i> Ver</a>
      </td>
      <td>
         <a class="btn btn-success btn-mini" href="<?php echo url_for('asamblea/index?ente='.$ente->getIdPersonaJuridica().'&ejEcon='
         .$EjercicioEconomico->getIdEjercicioEconomico()) ?>"><i class="icon-search icon-white"></i> Ver</a> 
      </td>
      <?php if($sf_user->isAuthenticated()):?>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('ejercicioEconomico/edit?id_ejercicio_economico='.$EjercicioEconomico->getIdEjercicioEconomico()) ?>"><i class="icon-pencil icon-white"></i> Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i> Eliminar', 'ejercicioEconomico/delete?id_ejercicio_economico='.$EjercicioEconomico->getIdEjercicioEconomico(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el Ejercicio Económico?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
      <?php endif;?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('personaJuridica/index?ente='.$ente->getNombreFantasia()) ?>"><i class="icon-arrow-left icon-white"></i> Volver al Ente</a>
<?php if($sf_user->isAuthenticated()):?>
  <a class="btn btn-info" href="<?php echo url_for('ejercicioEconomico/new?ente='.$ente->getIdPersonaJuridica()) ?>"><i class="icon-plus-sign icon-white"></i> Nuevo Ejercicio Económico</a>
<?php endif;?>