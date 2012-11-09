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
    Lista de Entes y vencimiento para el Nuevo Mandato</h3>
<hr>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Nombre Cooperativa</th>
      <th>Cierre de Ej. Económico</th>
      <th>Fecha tope para Nuevo Mandato</th>      
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
                $dias = $ejer->getPersonaJuridica()->getEstatutos()->getCurrent()->getDiasParaFechaTopeNuevoMandato();
                $fecha_limite_new_mandato = suma_ndias_a_fecha($fecha_vencimiento, $dias);
                echo $fecha_limite_new_mandato;
              ?>
          </td>
          <td><?php
                $diferencia_dias = ((strtotime($fecha_limite_new_mandato) 
                        - strtotime($hoy))/86400);
                //echo "dif: ".$diferencia_dias."- ";
                $dias_tope_new_mandato = $ejer->getPersonaJuridica()->getEstatutos()
                        ->getCurrent()->getDiasParaFechaTopeNuevoMandato();
                $asamblea_realizada = false;
                foreach($ejer->getAsambleas() as $asamblea){
                    if ($asamblea->getTipoAsambleaId() == 1){
                        $asamblea_realizada = true;
                    }
                }                
                if(($diferencia_dias > 0)&&($diferencia_dias <= $dias_tope_new_mandato)&&(!$asamblea_realizada)):?>
                    <a class="btn btn-danger btn-mini" 
                       href="<?php echo url_for('alerta/enviarAvisoNuevoMandato?ente='.$ejer->getPersonaJuridicaId())?>">
                    <i class="icon-envelope icon-white"></i> Enviar Alerta</a>
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


