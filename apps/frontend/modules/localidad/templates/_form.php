<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('localidad/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_localidad='.$form->getObject()->getIdLocalidad() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="table table-bordered"> 
    <tfoot style="background: #7FDDCA">      
      <tr>
        <td colspan="2">
          &nbsp;<a class="btn btn-info" href="<?php echo url_for('localidad/index') ?>">Atras</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php //echo link_to('Delete', 'localidad/delete?id_localidad='.$form->getObject()->getIdLocalidad(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>                              
          <input class="btn btn-info" type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php           
          //echo $form;          
          
          echo $form['nombre_localidad']->renderRow();
          echo $form['codigo_postal']->renderRow();
          echo $form['provincia_id']->renderRow();
          echo $form->renderHiddenFields();
          
      ?>
      <!-- // Muestro un modal  
      <td>
        <a href='#myModal' role='button' class='btn btn-success' data-toggle='modal'>Agregar Provincia</a>
        <?php /*     
            $prueba = "Se pasaron los datos bien";
            $prov = new ProvinciaForm();
            echo include_partial('modal',array('prueba'=>$prueba, 'provincia'=>$prov));
         * 
         */
        ?> 
        </td>   -->
    </tbody>
  </table>
</form>
