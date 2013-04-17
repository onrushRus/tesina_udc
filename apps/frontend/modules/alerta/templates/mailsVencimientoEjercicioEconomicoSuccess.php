<?php /*@var $mail EnteAlerta */ ?>
<div class="alert alert-heading" align="center">
<h3> Historial de Mails enviados a </h3>
<h2><?php echo $ente->getNombreFantasia() ?></h2>
</div>
<hr>
<?php if(sizeof($mails)>0):?>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>      
      <th>Fecha de Envío</th>
      <th>Usuario</th>      
    </tr>
  </thead>
  <tbody>
    <?php foreach($mails as $mail):?>
      <?php if(($mail->getFechaEnvio('Y') == date('Y')) && ($mail->getFechaEnvio('m') == date('m'))) :?>
        <tr>
            <td><?php echo $mail->getFechaEnvio('d-m-Y');?></td>
            <td><?php echo $mail->getUsuario();?></td>
        </tr>
      <?php endif;?>
    <?php endforeach;?>
  </tbody>
 </table>
<?php else:?>
<div class="alert alert-info" align="center">
    <h2> No se le ha enviado ningún mail este mes!.</h2>
</div>
<?php endif;?>
<hr>
<a class="btn btn-success" href="<?php echo url_for('alerta/vencimientoEjercicioEconomico') ?>"><i class="icon-arrow-left icon-white"></i> Volver</a>