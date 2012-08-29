<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('actividadPersJuridica/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?actividad_id='.$form->getObject()->getActividadId().'&persona_juridica_id='.$form->getObject()->getPersonaJuridicaId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="table table-bordered">
    <tfoot style="background: #7FDDCA">
      <tr>
        <td colspan="2">
          &nbsp;<a class="btn btn-info" href="<?php echo url_for('actividadPersJuridica/index') ?>">Atras</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php //echo link_to('Delete', 'actividadPersJuridica/delete?actividad_id='.$form->getObject()->getActividadId().'&persona_juridica_id='.$form->getObject()->getPersonaJuridicaId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
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
