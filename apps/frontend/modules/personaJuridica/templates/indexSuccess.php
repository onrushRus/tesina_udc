<?php /*@var $PersonaJuridica PersonaJuridica */
      /*@var $cargos EjercicioEconomico */  
?>
<?php 
    $cant = sizeof($PersonaJuridicas);
    if($cant >= 1):?>

<h1 class="alert alert-info"><?php echo $ente?></h1>
<hr>
<!-- Inicio de Tabla de Datos Básicos -->
<h3 class="alert-heading">Datos Básicos</h3>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Matricula</th>
      <th>Legajo</th>      
      <th>C.U.I.T./C.U.I.L.</th>
      <th>Inicio Actividad</th>
      <th>Telefono</th>      
      <?php if($sf_user->isAuthenticated()&&(($sf_user->hasCredential('1') || $sf_user->hasCredential('2')))):?>
        <th>Acciones</th>
      <?php endif;?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($PersonaJuridicas as $PersonaJuridica): ?>
    <tr>
      <td><?php echo $PersonaJuridica->getMatricula() ?></td>
      <td><?php echo $PersonaJuridica->getLegajo() ?></td>        
      <td><?php echo $PersonaJuridica->getCuitcuil() ?></td>
      <td><?php echo $PersonaJuridica->getFechaInicioActividad('d-m-Y') ?></td>
      <td><?php echo $PersonaJuridica->getTelefono() ?></td>      
      <?php if($sf_user->isAuthenticated() && (($sf_user->hasCredential('1')) ||($sf_user->hasCredential('2')))):?>
        <td>          
            <a class="btn btn-warning btn-mini" href="<?php echo url_for('personaJuridica/edit?id_persona_juridica='.$PersonaJuridica->getIdPersonaJuridica()) ?>"><i class="icon-pencil icon-white"></i> Editar</a>
            <?php if($sf_user->isAuthenticated() && $sf_user->hasCredential('1')){
                echo link_to('<i class="icon-trash icon-white"></i> Borrar', 'personaJuridica/delete?id_persona_juridica='.$PersonaJuridica->getIdPersonaJuridica(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el ente?', 'class'=>"btn btn-danger btn-mini"));
            }?>
        </td>
      <?php endif;?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<!-- Fin de Tabla de Datos Básicos -->
<br>
<!-- Inicio de Tabla de Personal a Cargo -->
<h3 class="alert-heading">Representantes | Inicio de actividad</h3>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Presidente</th>
      <th>Secretario</th>      
      <th>Tesorero</th>
      <th>Síndico</th>
    </tr>
  </thead>
  <tbody>
    <tr>
   <?php 
        $puesto = 1;
        // si $cargos es distinta de null ($cargos es de tipo EjercicioEconomico), se iteran sus datos sino da error
        if ($cargos):?>
            <!-- es necesario un foreach en cada cargo comparando el id del puesto en el propel collection iterado-->
            <td>
             <?php foreach ($cargos->getPersonaComisionDirectivasJoinPuestoComisionDirectiva() as $temp):?>
                <?php if($temp->getPuestoId() == 1):?><?php echo $temp->getNombreyApellido()." &nbsp; | &nbsp; ".$temp->getFechaInicioActividad('d-m-Y')?><?php endif?>
             <?php endforeach; ?>
            </td>
            <td>
             <?php foreach ($cargos->getPersonaComisionDirectivasJoinPuestoComisionDirectiva() as $temp):?>
                <?php if($temp->getPuestoId() == 2):?><?php echo $temp->getNombreyApellido()." &nbsp; | &nbsp; ".$temp->getFechaInicioActividad('d-m-Y')?><?php endif?>
             <?php endforeach; ?>
            </td>
            <td>
             <?php foreach ($cargos->getPersonaComisionDirectivasJoinPuestoComisionDirectiva() as $temp):?>
                <?php if($temp->getPuestoId() == 3):?><?php echo $temp->getNombreyApellido()." &nbsp; | &nbsp; ".$temp->getFechaInicioActividad('d-m-Y')?><?php endif?>
             <?php endforeach; ?>
            </td>
             <td>
             <?php foreach ($cargos->getPersonaComisionDirectivasJoinPuestoComisionDirectiva() as $temp):?>
                <?php if($temp->getPuestoId() == 4):?><?php echo $temp->getNombreyApellido()." &nbsp; | &nbsp; ".$temp->getFechaInicioActividad('d-m-Y')?><?php endif?>
             <?php endforeach; ?>
            </td>
        <?php endif;?>
    </tr>
  </tbody>
</table>
<!-- Fin de Tabla de Datos Básicos -->
<br>
<!-- Inicio de Tabla de Otros Datos -->
<h3 class="alert-heading">Otros Datos</h3>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Dirección Real</th>
      <th>Dirección Postal</th>
      <th>Imagenes</th>
      <th>Estatuto</th>
      <th>Ejercicio/s Económico/s</th>
      <th>Aporte/s</th>
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
              <?php if($sf_user->isAuthenticated() && (($sf_user->hasCredential('1')) ||($sf_user->hasCredential('2')))):?>
                <a class="btn btn-warning btn-mini" href="<?php echo url_for('direccion/index?id_direccion='.$dirReal->getIdDireccion()) ?>"><i class="icon-search icon-white"></i> Ver/Editar</a>
                <?php else:?>
                <a class="btn btn-info btn-mini" href="<?php echo url_for('direccion/index?id_direccion='.$dirReal->getIdDireccion()) ?>"><i class="icon-search icon-white"></i> Ver</a>
              <?php endif;?>
          </td>
      <?php else: ?>
          <td>
            <?php if($sf_user->isAuthenticated() && (($sf_user->hasCredential('1')) ||($sf_user->hasCredential('2')))):?>
              <a class="btn btn-info btn-mini" href="<?php echo url_for('direccion/new?ente='.$PersonaJuridica->getIdPersonaJuridica().'&tipoDir=1')?>"><i class="icon-plus-sign icon-white"></i> Nueva Dir.</a>
            <?php else:?>
              <h4 class="alert-danger"></i>Cargar Dirección</h4>
            <?php endif;?>  
          </td>
      <?php endif; ?>
      <!-- Fin Direccion Real del Ente -->         
      <!-- Agrego o Edito la Direccion Postal del ente -->
      <?php  
        $cantDirPostal = sizeof($dirPostal);
        if($cantDirPostal>0): ?>
          <td>
              <?php if($sf_user->isAuthenticated() && (($sf_user->hasCredential('1')) ||($sf_user->hasCredential('2')))):?>
                <a class="btn btn-warning btn-mini" href="<?php echo url_for('direccion/index?id_direccion='.$dirPostal->getIdDireccion()) ?>"><i class="icon-search icon-white"></i> Ver/Editar</a>
                <?php else:?>
                <a class="btn btn-info btn-mini" href="<?php echo url_for('direccion/index?id_direccion='.$dirPostal->getIdDireccion()) ?>"><i class="icon-search icon-white"></i> Ver</a>
              <?php endif;?>
         </td>
      <?php else: ?>
          <td>
            <?php if($sf_user->isAuthenticated() && (($sf_user->hasCredential('1')) ||($sf_user->hasCredential('2')))):?>  
              <a class="btn btn-info btn-mini" href="<?php echo url_for('direccion/new?ente='.$PersonaJuridica->getIdPersonaJuridica().'&tipoDir=2') ?>"><i class="icon-plus-sign icon-white"></i> Nueva Dir.</a> 
            <?php else:?>
              <h4 class="alert-danger">Cargar Dirección</h4>
            <?php endif;?>   
          </td>
      <?php endif; ?>
      <!-- Fin Direccion Postal del Ente -->      
      <!-- Agrego o Edito las imagenes del ente -->
      <?php  
        $cantImagen = sizeof($imagen);
        if($cantImagen>0): ?>
          <td>
              <a class="btn btn-warning btn-mini" href="<?php echo url_for('imagenes/index?ente='.$PersonaJuridica->getIdPersonaJuridica()  ) ?>"><i class="icon-pencil icon-white"></i> Ver/Editar</a> 
          </td>
      <?php else: ?>
          <td>
            <?php if($sf_user->isAuthenticated() && (($sf_user->hasCredential('1')) ||($sf_user->hasCredential('2')))):?>    
              <a class="btn btn-info btn-mini" href="<?php echo url_for('imagenes/new?ente='.$PersonaJuridica->getIdPersonaJuridica()) ?>"><i class="icon-plus-sign icon-white"></i> Nueva Img.</a> 
            <?php else:?>
              <h4 class="alert-danger">Sin Imágenes</h4>
            <?php endif;?> 
          </td>
      <?php endif; ?>
      <!-- Fin imagenes del ente-->      
      <!-- Agrego o Edito el Estatuto del ente -->
      <?php  
        $CantEstatuto = sizeof($estatuto);
        if($CantEstatuto>0): ?>
          <td>
              <a class="btn btn-warning btn-mini" href="<?php echo url_for('estatuto/index?ente='.$PersonaJuridica->getIdPersonaJuridica()) ?>"><i class="icon-pencil icon-white"></i> Editar</a> 
          </td>
      <?php else: ?>
          <td>
            <?php if($sf_user->isAuthenticated() && (($sf_user->hasCredential('1')) ||($sf_user->hasCredential('2')))):?>      
              <a class="btn btn-info btn-mini" href="<?php echo url_for('estatuto/new?ente='.$PersonaJuridica->getIdPersonaJuridica()) ?>"><i class="icon-plus-sign icon-white"></i> Agregar</a> 
            <?php else:?>
              <h4 class="alert-danger">Sin Estatuto</h4>
            <?php endif;?>
          </td>
      <?php endif; ?>
      <!-- Fin Edicion Estatuto del Ente -->
      <!-- Inicio del Boton para explorar el listado de Ejercicios Economicos del Ente -->
      <td>          
          <a class="btn btn-success btn-mini" href="<?php echo url_for('ejercicioEconomico/index?ente='.$PersonaJuridica->getIdPersonaJuridica()) ?>"><i class="icon-search icon-white"></i> Ver Historial</a>
      </td>
      <!-- Fin del Boton para explorar el listado de Ejercicios Economicos del Ente -->
      <!-- Inicio del Boton para explorar el listado de Aportes del Ente -->
      <td>
          <a class="btn btn-success btn-mini" href="<?php echo url_for('aporte/index?ente='.$PersonaJuridica->getIdPersonaJuridica()) ?>"><i class="icon-search icon-white"></i> Ver Aportes</a> 
      </td>
      <!-- Fin del Boton para explorar el listado de Aportes del Ente -->
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<!-- Fin de Tabla de Datos Básicos -->
<br>
<?php endif;?>
<?php //if($sf_user->isAuthenticated()):?>
  <!-- <a class="btn btn-info" href="<?php //echo url_for('personaJuridica/new') ?>"><i class="icon-plus-sign icon-white"></i>Agregar Ente</a> -->
<?php //endif;?>
