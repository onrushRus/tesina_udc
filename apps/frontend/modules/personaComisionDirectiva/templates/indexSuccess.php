<h1 class="alert alert-info"><?php echo $ente->getNombreFantasia()?></h1>
<hr>
<h3 class="alert-heading">Consejo de Administración</h3>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>  
      <th>Nombre y Apellido</th>
      <th>Teléfono</th>
      <th>E-mail</th>
      <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
        <th>Acciones</th>
      <?php endif;?>  
    </tr>
  </thead>
  <tbody>
    <tr>
       <?php if(sizeof($presidente)<1):?>
        <td>Sin Datos</td>
        <td>Sin Datos</td>
        <td>Sin Datos</td>
        <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
          <td><a class="btn btn-info" href="<?php echo url_for('personaComisionDirectiva/new?ente='.$ente->getIdPersonaJuridica().'&ejerEconomico='.$ejerEcon.'&puestoId=1') ?>"><i class="icon-plus-sign icon-white"></i> Presidente</a></td>
        <?php endif;?>  
       <?php else:?>
        <td><?php echo $presidente->getNombreYApellido()?></td>
        <td><?php echo $presidente->getTelefono()?></td>
        <td><?php echo $presidente->getEmail()?></td>
        <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
        <td><a class="btn btn-warning" href="<?php echo url_for('personaComisionDirectiva/edit?ente='
                  .$ente->getIdPersonaJuridica().'&ejerEconomico='
                  .$ejerEcon.'&puestoId=1'.'&id_persona_comision_directiva='
                  .$presidente->getIdPersonaComisionDirectiva()) ?>"><i class="icon-pencil icon-white"></i> Presidente</a></td>
        <?php endif;?>
       <?php endif;?> 
    </tr>
    <tr>
       <?php if(sizeof($secretario)<1):?>
          <td>Sin Datos</td>
          <td>Sin Datos</td>
          <td>Sin Datos</td>
          <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
            <td><a class="btn btn-info" href="<?php echo url_for('personaComisionDirectiva/new?ente='.$ente->getIdPersonaJuridica().'&ejerEconomico='.$ejerEcon.'&puestoId=2') ?>"><i class="icon-plus-sign icon-white"></i> Secretario</a></td>
          <?php endif;?>  
       <?php else:?>
          <td><?php echo $secretario->getNombreYApellido()?></td>
          <td><?php echo $secretario->getTelefono()?></td>
          <td><?php echo $secretario->getEmail()?></td>
          <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
          <td><a class="btn btn-warning" href="<?php echo url_for('personaComisionDirectiva/edit?ente='
                  .$ente->getIdPersonaJuridica().'&ejerEconomico='
                  .$ejerEcon.'&puestoId=1'.'&id_persona_comision_directiva='
                  .$secretario->getIdPersonaComisionDirectiva()) ?>"><i class="icon-pencil icon-white"></i> Secretario</a></td>
          <?php endif;?>
       <?php endif;?>
    </tr>
    <tr>
        <?php if(sizeof($tesorero)<1):?>
          <td>Sin Datos</td>
          <td>Sin Datos</td>
          <td>Sin Datos</td>
          <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
            <td><a class="btn btn-info" href="<?php echo url_for('personaComisionDirectiva/new?ente='.$ente->getIdPersonaJuridica().'&ejerEconomico='.$ejerEcon.'&puestoId=3') ?>"><i class="icon-plus-sign icon-white"></i> Tesorero</a></td>
          <?php endif;?>  
        <?php else:?>
          <td><?php echo $tesorero->getNombreYApellido()?></td>
          <td><?php echo $tesorero->getTelefono()?></td>
          <td><?php echo $tesorero->getEmail()?></td>
          <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
          <td><a class="btn btn-warning" href="<?php echo url_for('personaComisionDirectiva/edit?ente='
                  .$ente->getIdPersonaJuridica().'&ejerEconomico='
                  .$ejerEcon.'&puestoId=1'.'&id_persona_comision_directiva='
                  .$tesorero->getIdPersonaComisionDirectiva()) ?>"><i class="icon-pencil icon-white"></i> Tesorero</a></td>  
          <?php endif;?>
        <?php endif;?>
    </tr>
    <tr>
        <?php if(sizeof($sindico)<1):?>
          <td>Sin Datos</td>
          <td>Sin Datos</td>
          <td>Sin Datos</td>  
          <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
            <td><a class="btn btn-info" href="<?php echo url_for('personaComisionDirectiva/new?ente='.$ente->getIdPersonaJuridica().'&ejerEconomico='.$ejerEcon.'&puestoId=4') ?>"><i class="icon-plus-sign icon-white"></i> Síndico</a></td>
          <?php endif;?>  
        <?php else:?>
          <td><?php echo $tesorero->getNombreYApellido()?></td>
          <td><?php echo $tesorero->getTelefono()?></td>
          <td><?php echo $tesorero->getEmail()?></td>
          <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
          <td><a class="btn btn-warning" href="<?php echo url_for('personaComisionDirectiva/edit?ente='
                  .$ente->getIdPersonaJuridica().'&ejerEconomico='
                  .$ejerEcon.'&puestoId=1'.'&id_persona_comision_directiva='
                  .$sindico->getIdPersonaComisionDirectiva()) ?>"><i class="icon-pencil icon-white"></i> Síndico</a></td>
          <?php endif;?>
        <?php endif;?>    
    </tr>
  </tbody>
</table>  
<br>
<a class="btn btn-success" href="<?php echo url_for('ejercicioEconomico/index?ente='.$ente->getIdPersonaJuridica()) ?>"><i class="icon-arrow-left icon-white"></i> Volver al Historial</a>
<a class="btn btn-success" href="<?php echo url_for('personaJuridica/index?ente='.$ente->getNombreFantasia()) ?>"><i class="icon-arrow-left icon-white"></i> Volver al Ente</a>

