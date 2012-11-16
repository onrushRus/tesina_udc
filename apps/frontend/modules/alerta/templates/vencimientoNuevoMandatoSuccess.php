<?php /*@var $ejer EjercicioEconomico */ 
      /*@var $asamblea Asamblea */ 
?>
<?php
    function suma_ndias_a_fecha($fecha, $ndias){
        $dia = null;
        $mes = null;
        $anio = null;
        if(preg_match("/[0-9]{1,2}\/[0-9]{1,2}\/([0-9][0-9]){1,2}/",$fecha)){
             list($dia, $mes, $anio) = explode("/",$fecha);}
        if(preg_match("/[0-9]{1,2}-[0-9]{1,2}-([0-9][0-9]){1,2}/",$fecha)){
             list($dia, $mes, $anio) = explode("-",$fecha);}
        $nueva = mktime(0,0,0,$mes,$dia,$anio) + ($ndias * 24 * 60 * 60);        
        $nueva_fecha = date("d-m-Y",$nueva);        
        return ($nueva_fecha);
    }
    
?>

<h3 class="alert alert-heading" align="center">Hoy es: <?php echo $hoy ?><br>
    Lista de Entidades y vencimiento para la renovación de autoridades</h3>
<hr>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Nombre Cooperativa</th>
      <th>Cierre de Ej. Económico</th>
      <th>Fecha tope para Nuevo Mandato</th>      
      <th>Envío de alerta</th>
      <th>Historial de Alertas</th>
    </tr>
  </thead>
  <tbody>
    <!-- COMIENZO A RECORRER LOS EJERCICIOS ECONOMICOS DEL AÑO ANTERIOR AL ACTUAL -->    
    <?php foreach ($ejercicios as $ejer):?>
      <?php 
      if($ejer->getPersonaJuridica()->getEstatutos()->getCurrent() != null):?>
      <tr>
        <?php 
           // me fijo si para este ej. ec. ya se hizo la asamblea ordinaria correspondiente
           $asamblea_realizada = false;
           foreach($ejer->getAsambleas() as $asamblea){
              if ($asamblea->getTipoAsambleaId() == 1){
                  $asamblea_realizada = true;
              }
           }
           if(!$asamblea_realizada):?>
                <?php
                // extraigo la fecha de fin del ejercicio economico
                $fecha_vencimiento = $ejer->getFechaFinEjercicioEconomico("d-m-Y");
                //echo "fecha: ".$fecha_vencimiento."<br>";
                // me fijo en el estatuto los dias que tengo para el llamar a asamblea
                $dias = $ejer->getPersonaJuridica()->getEstatutos()->getCurrent()->getDiasParaFechaTopeAsamblea();
                //echo "dias: ".$dias."<br>";
                // obtengo la fecha tope que tengo para llamar a asamblea
                $fecha_limite_asamblea = suma_ndias_a_fecha($fecha_vencimiento, $dias);

                // me fijo en el estatuto los dias que tengo para el el cambio de mandato
                $dias_new_mandato = $ejer->getPersonaJuridica()->getEstatutos()
                        ->getCurrent()->getDiasParaFechaTopeNuevoMandato();
                
                // obtengo la fecha tope que tengo para el cambio de mandato
                $fecha_limite_cambio_mandato = suma_ndias_a_fecha($fecha_limite_asamblea, $dias_new_mandato);
                //echo "fecha_limite: ".$fecha_limite_cambio_mandato;
                // obtengo la diferencia de dias entre la fecha limite y hoy
                $diferencia_dias = ((strtotime($fecha_limite_cambio_mandato) - strtotime($hoy))/86400);
                //echo "dif: ".$diferencia_dias."  - ";
                ?>
                <?php
                // me fijo si cumple con las condiciones para la alerta
                if(($diferencia_dias > 0)&&($diferencia_dias <= $dias_new_mandato)):?>                                                    
                    <!-- MUESTRO TODOS LOS ENTES QUE CUMPLEN LAS CONDICIONES -->
                    <!-- nombre de fantasia del ente -->
                    <td><strong><a href="<?php echo url_for('personaJuridica/index?ente='.$ejer->getPersonaJuridica()->getNombreFantasia()) ?>"><?php echo $ejer->getPersonaJuridica()->getNombreFantasia() ?></a></strong></td>
                    <!-- la fecha del fin del ejer. econom. del ente -->
                    <td><?php echo $ejer->getFechaFinEjercicioEconomico("d-m-Y") ?></td>
                    <!-- la fecha limite para el nuevo mandato -->
                    <td><?php echo $fecha_limite_cambio_mandato;?></td>
                    <td><a class="btn btn-danger btn-mini" 
                        href="<?php echo url_for('alerta/enviarAvisoNuevoMandato?ente='.$ejer->getPersonaJuridicaId())?>">
                        <i class="icon-envelope icon-white"></i> Enviar Alerta</a>
                    </td>
                    <td>
                        <a class="btn btn-info btn-mini" 
                        href="<?php echo url_for('alerta/mailsVencimientoNuevoMandato?eid='.$ejer->getPersonaJuridicaId()
                                ."&aid=3")?>">
                        <i class="icon-envelope icon-white"></i> Mails Enviados</a>
                    </td>
                <?php endif;?>
            <?php endif;?>
      </tr>      
      <?php endif;?>
    <!-- TERMINO DE RECORRER LOS EJERCICIOS ECONOMICOS DEL AÑO ANTERIOR AL ACTUAL -->    
    <?php endforeach;?>
  </tbody>
</table>








