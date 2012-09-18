<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('asamblea/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_asamblea='.$form->getObject()->getIdAsamblea().'&ejercicio_economico_id='.$form->getObject()->getEjercicioEconomicoId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="table table-bordered"> 
    <tfoot style="background: #7FDDCA">    
      <tr>
        <td colspan="2">
          &nbsp;<!-- <a class="btn btn-info" href="<?php //echo url_for('asamblea/index') ?>">Back to list</a> -->
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php //echo link_to('Delete', 'asamblea/delete?id_asamblea='.$form->getObject()->getIdAsamblea().'&ejercicio_economico_id='.$form->getObject()->getEjercicioEconomicoId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
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
