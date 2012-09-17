<h1 class="alert-heading">Busqueda de Entes</h1>

<fieldset>
    <form class="well form-search" action="<?php echo url_for('personaJuridica/index') ?>" method="POST">
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Nombre de Ente" name="ente"
       data-source='[<?php foreach($entes as $ente){echo "\"".$ente->getNombreFantasia()."\"";if($entes->getPosition()< sizeof($entes)-1){echo(",");}}?>]'>
       <button type="submit" class="btn btn-toolbar">Buscar</button>
       <button type="reset" class="btn btn-toolbar">Limpiar</button>
    </form>
</fieldset>
<br>

<?php 
    $cant = sizeof($PersonaJuridicas);
    if($cant >= 1):?>
<!-- Inicio de Tabla de Datos Básicos -->
<h4 class="alert-heading">Datos Básicos</h4>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <!-- <th>Id persona juridica</th> 
      <th>Situacion</th> 
      <th>Tipo pers juridica</th>       
      <th>CUIT/CUIL</th> 
      <th>Fecha inicio actividad</th>      
      <th>Resenia</th>            
      <th>Cantidad de socios</th> -->
      <th>Matricula</th>
      <th>Legajo</th>
      <th>Nombre fantasia</th>      
      <th>Telefono</th>     
      <th>Email</th>    
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($PersonaJuridicas as $PersonaJuridica): ?>
    <tr>
      <!-- <td><a href="<?php //echo url_for('personaJuridica/edit?id_persona_juridica='.$PersonaJuridica->getIdPersonaJuridica()) ?>"><?php echo $PersonaJuridica->getIdPersonaJuridica() ?></a></td>
      <td><?php //echo $PersonaJuridica->getSituacionId() ?></td>
      <td><?php //echo $PersonaJuridica->getTipoPersJuridicaId() ?></td> 
      <td><?php //echo $PersonaJuridica->getCuitCuil() ?></td>  
      <td><?php //echo $PersonaJuridica->getFechaInicioActividad() ?></td>
      <td><?php //echo $PersonaJuridica->getResenia() ?></td>
      <td><?php //echo $PersonaJuridica->getCantidadDeSocios() ?></td> -->       
      <td><?php echo $PersonaJuridica->getMatricula() ?></td>
      <td><?php echo $PersonaJuridica->getLegajo() ?></td>        
      <td><?php echo $PersonaJuridica->getNombreFantasia() ?></td>      
      <td><?php echo $PersonaJuridica->getTelefono() ?></td>
      <td><?php echo $PersonaJuridica->getEmail() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('personaJuridica/edit?id_persona_juridica='.$PersonaJuridica->getIdPersonaJuridica()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'personaJuridica/delete?id_persona_juridica='.$PersonaJuridica->getIdPersonaJuridica(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el ente?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<!-- Fin de Tabla de Datos Básicos -->
<br>
<!-- Inicio de Tabla de Otros Datos -->
<h4 class="alert-heading">Otros Datos</h4>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Dirección Real</th>
      <th>Dirección Postal</th>
      <th>Estatuto</th>
      <th>Ejercicio/s Económico/s</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($PersonaJuridicas as $PersonaJuridica): ?>
    <tr>      
      <!-- Agrego o Edito la Direccion Real del ente -->
      <?php  
        $cantDirReal = sizeof($dirReal);
        if($cantDirReal>0): ?>
          <td>
              <a class="btn btn-success btn-mini" href="<?php echo url_for('direccion/edit?id_direccion='.$dirReal->getIdDireccion()) ?>"><i class="icon-pencil icon-white"></i>Editar</a>
          </td>
      <?php else: ?>
          <td>              
              <a class="btn btn-info btn-mini" href="<?php echo url_for('direccion/new?ente='.$PersonaJuridica->getIdPersonaJuridica().'&tipoDir=1')?>"><i class="icon-plus icon-white"></i>Nueva Dir.</a>
          </td>
      <?php endif; ?>
      <!-- Fin Direccion Real del Ente -->    
     
      <!-- Agrego o Edito la Direccion Postal del ente -->
      <?php  
        $cantDirPostal = sizeof($dirPostal);
        if($cantDirPostal>0): ?>
          <td>
              <a class="btn btn-success btn-mini" href="<?php echo url_for('direccion/edit?id_direccion='.$dirPostal->getIdDireccion()) ?>"><i class="icon-pencil icon-white"></i>Editar</a> 
          </td>
      <?php else: ?>
          <td>
              <a class="btn btn-info btn-mini" href="<?php echo url_for('direccion/new?ente='.$PersonaJuridica->getIdPersonaJuridica().'&tipoDir=2') ?>"><i class="icon-plus icon-white"></i>Nueva Dir.</a> 
          </td>
      <?php endif; ?>
      <!-- Fin Direccion Postal del Ente -->
      
      <!-- Agrego o Edito el Estatuto del ente -->
      <?php  
        $CantEstatuto = sizeof($estatuto);
        if($CantEstatuto>0): ?>
          <td>
              <a class="btn btn-success btn-mini" href="<?php echo url_for('estatuto/edit?id_estatuto='.$estatuto->getIdEstatuto()) ?>"><i class="icon-pencil icon-white"></i>Editar</a> 
          </td>
      <?php else: ?>
          <td>
              <a class="btn btn-info btn-mini" href="<?php echo url_for('estatuto/new?ente='.$PersonaJuridica->getIdPersonaJuridica()) ?>"><i class="icon-plus icon-white"></i>Agregar</a> 
          </td>
      <?php endif; ?>
      <!-- Fin Direccion Postal del Ente -->
      <!-- Inicio del Boton para explorar el listado de Ejercicios Economicos del Ente -->
      <td>
          <a class="btn btn-success btn-mini" href="<?php echo url_for('ejercicioEconomico/index?ente='.$PersonaJuridica->getIdPersonaJuridica()) ?>"><i class="icon-plus icon-white"></i>Ver Historial</a> 
      </td>
      <!-- Fin del Boton para explorar el listado de Ejercicios Economicos del Ente -->
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<!-- Fin de Tabla de Datos Básicos -->
<br>

<?php endif;?>
<a class="btn btn-info" href="<?php echo url_for('personaJuridica/new') ?>"><i class="icon-fire icon-white"></i>Agregar Ente</a>
