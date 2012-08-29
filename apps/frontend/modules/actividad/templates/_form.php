<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('actividad/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_actividad='.$form->getObject()->getIdActividad() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="table table-bordered">
    <tfoot style="background: #7FDDCA">
      <tr>
        <td colspan="2">
          &nbsp;<a class="btn btn-info" href="<?php echo url_for('actividad/index') ?>">Atras</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php //echo link_to('Delete', 'actividad/delete?id_actividad='.$form->getObject()->getIdActividad(), array('method' => 'delete', 'confirm' => 'Estás seguro de borrar la Actividad?')) ?>
          <?php endif; ?>
          <input class="btn btn-info" type="submit" value="Guardar" />
          <?php  ?>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
