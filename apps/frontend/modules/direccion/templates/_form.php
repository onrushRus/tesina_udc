<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('direccion/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_direccion='.$form->getObject()->getIdDireccion() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="table table-bordered">
    <tfoot style="background: #7FDDCA">
      <tr>
        <td colspan="2">
          &nbsp;<!-- <a class="btn btn-info" href="<?php //echo url_for('direccion/index') ?>">Atras</a> -->
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php //echo link_to('Delete', 'direccion/delete?id_direccion='.$form->getObject()->getIdDireccion(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>            
          <?php endif; ?>
          <?php if($sf_user->isAuthenticated() && (($sf_user->hasCredential('1') || ($sf_user->hasCredential('2'))))):?>
             <input class="btn btn-info" type="submit" value="Guardar" />
          <?php else:?>
             <a class="btn btn-danger" href="<?php echo url_for('personaJuridica/index?ente='.$form->getObject()->getPersonaJuridica()->getNombreFantasia()) ?>">Atras</a>
          <?php endif;?>          
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php //echo $form;
                          
          echo $form['localidad_id']->renderRow();          
          echo $form['calle']->renderRow();
          echo $form['numero']->renderRow();
          echo $form['piso']->renderRow();
          echo $form['departamento']->renderRow();          
          echo $form->renderHiddenFields();          
      ?>          
    </tbody>
  </table>
</form>
