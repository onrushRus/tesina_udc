<?php /*@var $PersonaJuridica PersonaJuridica */
      /*@var $cargos EjercicioEconomico */  
?>
<?php 
    $cant = sizeof($entidad);
    if($cant = 1):?>
<div class="alert alert-info" align="center">
<h3>Ficha técnica de:</h3>
<h1 class="alert-info"><?php echo $entidad->getNombreFantasia()?></h1>
</div>
<hr>
<!-- Inicio de Tabla de Datos de identificación -->
<h3 class="alert-heading">Datos Identificatorios</h3>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Tipo de entidad</th>
      <th>Situación</th>
      <th>Matricula</th>
      <?php if($sf_user->isAuthenticated()&&(($sf_user->hasCredential('1') || $sf_user->hasCredential('2')))):?>  
        <th>Legajo</th>      
        <th>Inicio Actividad</th>
      <?php endif;?>
      <th>C.U.I.T./C.U.I.L.</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $entidad->getTipoPersonaJuridica()->getTipoPersonaJuridica()?></td>
      <td><?php echo $entidad->getSituacionPersonaJuridica()->getSituacion()?></td>
      <td><?php echo $entidad->getMatricula()?></td>
      <?php if($sf_user->isAuthenticated()&&(($sf_user->hasCredential('1') || $sf_user->hasCredential('2')))):?>  
        <td><?php echo $entidad->getLegajo()?></td>
        <td><?php echo $entidad->getFechaInicioActividad('d-m-Y')?></td>
      <?php endif;?>
        <td><?php echo $entidad->getCuitCuil() ?></td>
    </tr>
  </tbody>
</table>
<!-- Fin de Tabla de Datos de identificación -->
<!-- Inicio de Tabla Reseña -->
<h3 class="alert-heading">Reseña</h3>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Reseña</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td><?php echo $entidad->getResenia()?></td>
    </tr>
  </tbody>
</table>
<!-- Fin de Tabla Reseña -->
<!-- Inicio de Tabla de más Datos -->
<h3 class="alert-heading">Más datos</h3>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Cantidad de socios</th>
      <th>Actividad | Objeto Social</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td><?php echo $entidad->getCantidadDeSocios()?></td>
        <td><?php foreach ($entidad->getActividadPersJuridicasJoinActividad() as $temp):
                      echo $temp->getActividad()->getActividad()." | ";
                  endforeach;?>
        </td>
    </tr>
  </tbody>
</table>
<!-- Fin de Tabla de más datos -->
<!-- Inicio de Tabla de Contacto -->
<h3 class="alert-heading">Datos de Contacto</h3>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Teléfono</th>
      <th>E-mail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td><?php echo $entidad->getTelefono()?></td>
        <td><?php echo $entidad->getEmail()?></td>
    </tr>
  </tbody>
</table>
<!-- Fin de Tabla de Contacto -->

<br>
<?php endif;?>
<a class="btn btn-success" href="<?php echo url_for('personaJuridica/index?ente='.$entidad->getNombreFantasia())?>"><i class="icon-arrow-left icon-white"></i> Volver</a>

