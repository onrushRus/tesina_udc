<?php /*@var $ejer EjercicioEconomico */ 
      /*@var $asamblea Asamblea */ 
?>
<?php
    function suma_ndias_a_fecha($fecha, $ndias){
    //suma a una fecha una cantidad de dias recibidas por parametro
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
    Lista de Entes y vencimiento para el Llamado a Asamblea</h3>
<hr>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Nombre Cooperativa</th>
      <th>Cierre de Ej. Económico</th>
      <th>Fecha tope para asamblea</th>      
      <th>Envío de alerta</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ejercicios as $ejer):?>
      <tr>
        <td><strong><a href="<?php echo url_for('personaJuridica/index?ente='.$ejer->getPersonaJuridica()->getNombreFantasia()) ?>"><?php echo $ejer->getPersonaJuridica()->getNombreFantasia() ?></a></strong></td>
        <td>
            <?php echo $ejer->getFechaFinEjercicioEconomico("d-m-Y") ?>
        </td>
        <?php
          if($ejer->getPersonaJuridica()->getEstatutos()->getCurrent() != null):?>
          <td><?php            
                $fecha_vencimiento = $ejer->getFechaFinEjercicioEconomico("d-m-Y");
                //echo "fecha: ".$fecha_vencimiento."<br>";
                $dias = $ejer->getPersonaJuridica()->getEstatutos()->getCurrent()->getDiasParaFechaTopeAsamblea();
                //echo "dias: ".$dias."<br>";
                $fecha_limite_asamblea = suma_ndias_a_fecha($fecha_vencimiento, $dias);
                echo $fecha_limite_asamblea;
              ?>
          </td>
          <td><?php
                $diferencia_dias = ((strtotime($fecha_limite_asamblea) 
                        - strtotime($hoy))/86400);
                //echo "dif: ".$diferencia_dias."- ";
                $dias_tope_asamblea = $ejer->getPersonaJuridica()->getEstatutos()
                        ->getCurrent()->getDiasParaFechaTopeConvocatoria();
                $asamblea_realizada = false;
                foreach($ejer->getAsambleas() as $asamblea){
                    if ($asamblea->getTipoAsambleaId() == 1){
                        $asamblea_realizada = true;
                    }
                }                
                if(!$asamblea_realizada):?>
                  <?php if(($diferencia_dias > 0)&&($diferencia_dias <= $dias_tope_asamblea)):?>
                        <a class="btn btn-danger btn-mini" 
                        href="<?php echo url_for('alerta/enviarAvisoLlamarAsamblea?ente='.$ejer->getPersonaJuridicaId())?>">
                        <i class="icon-envelope icon-white"></i> Enviar Alerta</a>
                    <?php endif;?>
               <?php else:?>
                    <!-- http://localhost/tesina_udc/frontend_dev.php/asamblea?ente=2&ejEcon=5 -->
                    <a class="btn btn-success btn-mini" 
                       href="<?php echo url_for('asamblea/index?ente='.$ejer->getPersonaJuridicaId()
                       ."&ejEcon=".$ejer->getIdEjercicioEconomico());?>"
                    ><i class="icon-ok-circle icon-white"></i> Ver Asamblea</a>
               <?php endif;?>
          </td>
        <?php else:?>
          <td> Sin Estatuto </td>
          <td> Sin Estatuto </td>
        <?php endif;?>
      </tr>  
    <?php endforeach;?>
  </tbody>
</table>


