<?php /*@var $MailAlerta MailAlerta */ ?>
<h1 class="alert alert-heading" align="center">Lista de Mensajes de Alerta</h1>
<hr>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>      
      <th>Tipo alerta</th>
      <th>Dias para aviso</th>
      <th>Cuerpo mensaje</th>
      <?php if($sf_user->isAuthenticated()):?>
        <th>Acciones</th>
      <?php endif;?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($MailAlertas as $MailAlerta): ?>
    <tr>      
      <td><?php 
                if($MailAlerta->getIdTipoAlerta() == '1'){
                    echo "Vencimiento Ejercicio Económico";
                }elseif($MailAlerta->getIdTipoAlerta() == '2'){
                    echo "Llamado a Asamblea";
                }elseif($MailAlerta->getIdTipoAlerta() == '3'){
                    echo "Asunción de Nuevo Mandato";
                }
           ?>
      </td>
      <td><?php echo $MailAlerta->getDiasParaAviso() ?></td>
      <td><?php echo substr($MailAlerta->getCuerpoMensaje(), 0, 40)." ..." ?></td>
      <td>
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('mailAlerta/edit?id_tipo_alerta='.$MailAlerta->getIdTipoAlerta()) ?>"><i class="icon-pencil icon-white"></i> Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i> Eliminar', 'mailAlerta/delete?id_tipo_alerta='.$MailAlerta->getIdTipoAlerta(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el mail de Alerta?', 'class'=>"btn btn-danger btn-mini")) ?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<hr>

<!-- Oculto el boton "agregar nueva alerta"! por las dudas
<?php //if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
  <!-- <a class="btn btn-info" href="<?php //echo url_for('mailAlerta/new') ?>"><i class="icon-plus-sign icon-white"></i> Nuevo Mensaje de Alerta</a> -->
<?php //endif;?>
