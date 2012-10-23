<?php /*@var $ente PersonaJuridica */ ?>
<h3 class="alert-heading">Hoy es: <?php echo $hoy ?></h3>
<h3 class="alert alert-heading" align="center">Lista de Entes y el vencimiento del Ejercicio Económico</h3>
<hr>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Nombre Cooperativa</th>
      <th>Días para vencimiento</th>
      <th>Cierre de Ej. Económico</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($entes as $ente):?>
      <tr>
        <td><strong><?php echo $ente->getNombreFantasia() ?></strong></td>
        <td><?php echo ((strtotime($ente->getEjercicioEconomicos()->getCurrent()->getFechaFinEjercicioEconomico("d-m-Y")) - strtotime($hoy))/86400) ?></td>
        <td><?php echo $ente->getEjercicioEconomicos()->getCurrent()->getFechaFinEjercicioEconomico("d-m-Y") ?></td>
      </tr>  
    <?php endforeach;?>
  </tbody>
</table>
<hr>


<a href="<?php echo url_for("alerta/resultado") ?>">Resultado</a>