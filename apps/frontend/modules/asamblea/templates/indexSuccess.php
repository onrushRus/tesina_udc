<h1>Ente:</h1><h1 class="alert-heading"><?php echo $ente->getNombreFantasia() ?></h1>

<h2>Lista de Asambleas del Ejercicio Economico: <?php echo $Ejercicio->getNumeroEjercicioEconomico() ?></h2>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <!--<th>Id asamblea</th> 
      <th>Ejercicio economico</th> -->
      <th>Tipo asamblea</th>
      <th>Fecha asamblea</th>
      <th>Observaciones</th>      
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Asambleas as $Asamblea): ?>
    <tr>
      <!-- <td><a href="<?php //echo url_for('asamblea/edit?id_asamblea='.$Asamblea->getIdAsamblea().'&ejercicio_economico_id='.$Asamblea->getEjercicioEconomicoId()) ?>"><?php // echo $Asamblea->getIdAsamblea() ?></a></td> 
      <td><a href="<?php //echo url_for('asamblea/edit?id_asamblea='.$Asamblea->getIdAsamblea().'&ejercicio_economico_id='.$Asamblea->getEjercicioEconomicoId()) ?>"><?php //echo $Asamblea->getEjercicioEconomicoId() ?></a></td> -->
      <td><?php if($Asamblea->getTipoAsambleaId()==1){
              echo "Ordinaria";
          }else{
              echo "Extraordinaria";
          } ?>
      </td>      
      <td><?php echo $Asamblea->getFechaDeAsamblea('d-m-Y') ?></td>
      <td><?php echo $Asamblea->getObservaciones() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('asamblea/edit?id_asamblea='.$Asamblea->getIdAsamblea()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'asamblea/delete?id_asamblea='.$Asamblea->getIdAsamblea(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Asamblea?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-info" href="<?php echo url_for('personaJuridica/index?ente='.$ente->getNombreFantasia()) ?>"><i class="icon-fire icon-white"></i>Volver al Ente</a>
<a class="btn btn-info" href="<?php echo url_for('ejercicioEconomico/index?ente='.$ente->getIdPersonaJuridica()) ?>"><i class="icon-fire icon-white"></i>Volver al Historial</a>
<a class="btn btn-info" href="<?php echo url_for('asamblea/new?ejerEcon='.$Ejercicio->getIdEjercicioEconomico()) ?>"><i class="icon-fire icon-white"></i>Nueva Asamblea</a>
<!-- <a href="<?php //echo url_for('asamblea/new') ?>">New</a> -->
