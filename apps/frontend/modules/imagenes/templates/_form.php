<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('imagenes/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_imagenes='.$form->getObject()->getIdImagenes() : '')) ?>" enctype="multipart/form-data" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="table table-bordered"> 
    <tfoot style="background: #7FDDCA">
      <tr>
        <td colspan="2">
          &nbsp;<!--<a href="<?php //echo url_for('imagenes/index') ?>">Back to list</a> -->
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php //echo link_to('Delete', 'imagenes/delete?id_imagenes='.$form->getObject()->getIdImagenes(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input class="btn btn-info" type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php //echo $form
          
          echo $form['descripcion']->renderRow();          
          echo $form['nombre_archivo']->renderRow(array('width' => 100));
          
          echo $form->renderHiddenFields();
     ?> 
    </tbody>
  </table>
</form>
