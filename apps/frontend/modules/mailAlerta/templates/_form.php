<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('mailAlerta/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_tipo_alerta='.$form->getObject()->getIdTipoAlerta() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
<table class="table table-bordered"> 
    <tfoot style="background: #7FDDCA">
      <tr>
        <td colspan="2">
          &nbsp;<a class="btn btn-success" href="<?php echo url_for('mailAlerta/index') ?>"> Atras</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php //echo link_to('Delete', 'mailAlerta/delete?id_tipo_alerta='.$form->getObject()->getIdTipoAlerta(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input class="btn btn-info" type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
