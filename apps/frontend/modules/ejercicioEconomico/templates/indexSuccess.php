<?php /*@var $EjercicioEconomico EjercicioEconomico */ ?>
<h1 class="alert alert-info" align="center"><?php echo $ente->getNombreFantasia()?></h1>
<hr>
<?php if((sizeof($EjercicioEconomicos))>0):?>
<h3 class="alert alert-heading" align="center">Lista de Ejercicios Economicos</h3>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Nro. de Ejercicio Económico</th>
      <th>Fin Ejercicio Económico</th>
      <th>Observaciones</th>
      <th>Resultado Económico</th>      
      <th>Órgano Directivo / Fiscalización</th>
      <th>Asamblea</th>
      <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
        <th>Acciones</th>
      <?php endif;?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($EjercicioEconomicos as $EjercicioEconomico): ?>
    <tr>
      <td><?php echo $EjercicioEconomico->getNumeroEjercicioEconomico() ?></td>
      <td><?php echo $EjercicioEconomico->getFechaFinEjercicioEconomico('d-m-Y') ?></td>
      <td><?php echo $EjercicioEconomico->getObservaciones() ?></td>
      <td><?php echo $EjercicioEconomico->getResultadoEconomico() ?></td>
      <td>
         <a class="btn btn-success btn-mini" href="<?php echo url_for('personaComisionDirectiva/index?ente='.$ente->getIdPersonaJuridica().'&ejerEcon='.$EjercicioEconomico->getIdEjercicioEconomico()) ?>"><i class="icon-search icon-white"></i> Ver</a>
      </td>
      <td>
         <a class="btn btn-success btn-mini" href="<?php echo url_for('asamblea/index?ente='.$ente->getIdPersonaJuridica().'&ejEcon='
         .$EjercicioEconomico->getIdEjercicioEconomico()) ?>"><i class="icon-search icon-white"></i> Ver</a> 
      </td>      
      <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('ejercicioEconomico/edit?id_ejercicio_economico='.$EjercicioEconomico->getIdEjercicioEconomico()) ?>"><i class="icon-pencil icon-white"></i> Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i> Eliminar', 'ejercicioEconomico/delete?id_ejercicio_economico='.$EjercicioEconomico->getIdEjercicioEconomico(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el Ejercicio Económico?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
      <?php endif;?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php else:?>
   <h3 class="alert alert-danger" align="center"> Este ente no tiene ningún Ejercicio Económico cargado !!</h3>
<?php endif;?>
<hr>
<a class="btn btn-success" href="<?php echo url_for('personaJuridica/index?ente='.$ente->getNombreFantasia()) ?>"><i class="icon-arrow-left icon-white"></i> Volver al Ente</a>
<?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
  <a class="btn btn-info" href="<?php echo url_for('ejercicioEconomico/new?ente='.$ente->getIdPersonaJuridica()) ?>"><i class="icon-plus-sign icon-white"></i> Nuevo Ejercicio Económico</a>
<?php endif;?>
