<?php /*@var $ente PersonaJuridica */ 
      /*@var $ejer EjercicioEconomico */
      /*@var $alerta Alerta */
?>
<h3 class="alert alert-heading" align="center">Hoy es: <?php echo $hoy ?><br>
    Lista de Entes y vencimiento del Ejercicio Económico</h3>
<hr>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Nombre Cooperativa</th>
      <th>Cierre de Ej. Económico</th>
      <th>Días para el cierre</th>
      <th>Envío de alerta</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ejercicios as $ejer):?>
      <?php          
          $dias = ((strtotime($ejer->getFechaFinEjercicioEconomico("d-m-Y"))
                   - strtotime($hoy))/86400);          
          if($dias <= $alerta->getDiasParaAviso()):?>
                <tr>
                    <td><strong><a href="<?php echo url_for('personaJuridica/index?ente='.$ejer->getPersonaJuridica()->getNombreFantasia()) ?>"><?php echo $ejer->getPersonaJuridica()->getNombreFantasia() ?></a></strong></td>
                    <td><?php echo $ejer->getFechaFinEjercicioEconomico("d-m-Y") ?></td>
                    <td><?php                
                            if ($dias>0){
                                echo $dias;
                            }else{
                                echo "Ya cerró el Ej. Económico";
                            }
                        ?>
                    </td>
                    <td><?php  
                        $dias = ((strtotime($ejer->getFechaFinEjercicioEconomico("d-m-Y")) 
                                    - strtotime($hoy))/86400);
                        if (($dias > 0) && ($dias < 50)):?>                
                                <a class="btn btn-danger btn-mini" 
                                href="<?php echo url_for('alerta/enviarAvisoCierreEjercicioEconomico?ente='.$ejer->getPersonaJuridicaId())?>">
                                <i class="icon-envelope icon-white"></i> Enviar Alerta</a>
                        <?php endif;?>        
                    </td>
                </tr>
          <?php endif;?>
    <?php endforeach;?>
  </tbody>
</table>
