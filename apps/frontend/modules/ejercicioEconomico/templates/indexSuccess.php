<h1>Ente:</h1><h1 class="alert-heading"><?php echo $ente->getNombreFantasia() ?></h1>
<h2>Lista de Ejercicios Economicos</h2>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <!-- <th>Id ejercicio economico</th> -->
      <!-- <th>Persona juridica</th> -->
      <th>Nro. de Ejercicio Economico</th>
      <th>Fecha fin ejercicio economico</th>
      <th>Consejo Administrativo</th>
      <th>Asamblea</th>
      <th>Acciones</th>
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
         <a class="btn btn-info btn-mini" href="<?php echo url_for('personaComisionDirectiva/index?ente='.$ente->getIdPersonaJuridica().'&ejerEcon='.$EjercicioEconomico->getIdEjercicioEconomico()) ?>"><i class="icon-search icon-white"></i>Ver</a>          
      </td>
      <td>
         <a class="btn btn-info btn-mini" href="<?php echo url_for('asamblea/index?ente='.$ente->getIdPersonaJuridica().'&ejEcon='
         .$EjercicioEconomico->getIdEjercicioEconomico()) ?>"><i class="icon-search icon-white"></i>Ver</a> 
      </td>      
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('ejercicioEconomico/edit?id_ejercicio_economico='.$EjercicioEconomico->getIdEjercicioEconomico()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'ejercicioEconomico/delete?id_ejercicio_economico='.$EjercicioEconomico->getIdEjercicioEconomico(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el Ejercicio Económico?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-info" href="<?php echo url_for('personaJuridica/index?ente='.$ente->getNombreFantasia()) ?>"><i class="icon-fire icon-white"></i>Volver al Ente</a>
<a class="btn btn-info" href="<?php echo url_for('ejercicioEconomico/new?ente='.$ente->getIdPersonaJuridica()) ?>"><i class="icon-fire icon-white"></i>Nuevo Ejercicio Económico</a>
<!--  <a href="<?php //echo url_for('ejercicioEconomico/new') ?>">New</a> -->
