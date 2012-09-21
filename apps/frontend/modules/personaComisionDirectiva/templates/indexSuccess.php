<h1 class="alert-heading"><?php echo $ente->getNombreFantasia() ?></h1>

<br>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>  
      <th>Consejo de Administración</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>
       <?php if(sizeof($presidente)<1):?>
          <a class="btn btn-info" href="<?php echo url_for('personaComisionDirectiva/new?ente='.$ente->getIdPersonaJuridica().'&ejerEconomico='.$ejerEcon.'&puestoId=1') ?>"><i class="icon-plus-sign icon-white"></i> Presidente</a>
       <?php else:?> 
          <a class="btn btn-warning" href="<?php echo url_for('personaComisionDirectiva/edit?ente='
                  .$ente->getIdPersonaJuridica().'&ejerEconomico='
                  .$ejerEcon.'&puestoId=1'.'&id_persona_comision_directiva='
                  .$presidente->getIdPersonaComisionDirectiva()) ?>"><i class="icon-plus icon-white"></i> Presidente</a>
       <?php endif;?> 
    </td></tr>
    <tr><td>
       <?php if(sizeof($secretario)<1):?>
          <a class="btn btn-info" href="<?php echo url_for('personaComisionDirectiva/new?ente='.$ente->getIdPersonaJuridica().'&ejerEconomico='.$ejerEcon.'&puestoId=2') ?>"><i class="icon-plus-sign icon-white"></i> Secretario</a>
       <?php else:?> 
          <a class="btn btn-warning" href="<?php echo url_for('personaComisionDirectiva/edit?ente='
                  .$ente->getIdPersonaJuridica().'&ejerEconomico='
                  .$ejerEcon.'&puestoId=1'.'&id_persona_comision_directiva='
                  .$secretario->getIdPersonaComisionDirectiva()) ?>"><i class="icon-plus icon-white"></i> Secretario</a>   
       <?php endif;?>
    </td></tr>    
    <tr><td>
        <?php if(sizeof($tesorero)<1):?>
          <a class="btn btn-info" href="<?php echo url_for('personaComisionDirectiva/new?ente='.$ente->getIdPersonaJuridica().'&ejerEconomico='.$ejerEcon.'&puestoId=3') ?>"><i class="icon-plus-sign icon-white"></i> Tesorero</a>
        <?php else:?> 
          <a class="btn btn-warning" href="<?php echo url_for('personaComisionDirectiva/edit?ente='
                  .$ente->getIdPersonaJuridica().'&ejerEconomico='
                  .$ejerEcon.'&puestoId=1'.'&id_persona_comision_directiva='
                  .$tesorero->getIdPersonaComisionDirectiva()) ?>"><i class="icon-plus icon-white"></i> Tesorero</a>  
        <?php endif;?>
    </td></tr>
    <tr><td>
        <?php if(sizeof($sindico)<1):?>
          <a class="btn btn-info" href="<?php echo url_for('personaComisionDirectiva/new?ente='.$ente->getIdPersonaJuridica().'&ejerEconomico='.$ejerEcon.'&puestoId=4') ?>"><i class="icon-plus-sign icon-white"></i> Síndico</a>
        <?php else:?> 
          <a class="btn btn-warning" href="<?php echo url_for('personaComisionDirectiva/edit?ente='
                  .$ente->getIdPersonaJuridica().'&ejerEconomico='
                  .$ejerEcon.'&puestoId=1'.'&id_persona_comision_directiva='
                  .$sindico->getIdPersonaComisionDirectiva()) ?>"><i class="icon-plus icon-white"></i> Síndico</a>  
        <?php endif;?>    
    </td></tr>
  </tbody>
</table>  
<br>
<a class="btn btn-success" href="<?php echo url_for('ejercicioEconomico/index?ente='.$ente->getIdPersonaJuridica()) ?>"><i class="icon-arrow-left icon-white"></i> Volver al Historial</a>
<a class="btn btn-success" href="<?php echo url_for('personaJuridica/index?ente='.$ente->getNombreFantasia()) ?>"><i class="icon-arrow-left icon-white"></i> Volver al Ente</a>

