<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('estatuto/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_estatuto='.$form->getObject()->getIdEstatuto() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="table table-bordered">
    <tfoot style="background: #7FDDCA">
      <tr>
        <td colspan="2">
          &nbsp;<!-- <a class="btn btn-info" href="<?php //echo url_for('estatuto/index') ?>">Atras</a> -->
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php //echo link_to('Delete', 'estatuto/delete?id_estatuto='.$form->getObject()->getIdEstatuto(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input class="btn btn-info" type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
     <?php //echo $form;?>   
      <!-- CREO LA SELECCION DE LA DURACION DLE EJERCICIO ECONOMICO -->
      <tr> 
        <td><label>Duración Ej. Econ.</label></td>
        <td><select name="estat[duracionEjEc]">
            <option value="1">1 año</option>
            <option value="2">2 años</option>
            <option value="3">3 años</option>
            <option value="4">4 años</option>
            <option value="5">5 años</option>
          </select>
        </td>
      </tr>
      <!-- CREO LA SELECCION DE LOS DIAS PARA FECHA TOPE DE ASAMBLEA -->
      <tr> 
        <td><label>Cant. de dias para fecha tope de asamblea</label></td>
        <td><select name="estat[diasTopeAsamblea]">
            <option value="15">15 días</option>  
            <option value="30">30 días</option>
            <option value="60">60 días</option>
            <option value="90">90 días</option>
            <option selected="selected" value="120">120 días</option>
          </select>
        </td>
      </tr>
      <!-- CREO LA SELECCION DE LOS DIAS PARA FECHA TOPE DE CONVOCATORIA -->
      <tr> 
        <td><label>Cant. de dias para fecha tope de convocatoria</label></td>
        <td><select name="estat[diasTopeConvocatoria]">
            <option value="5">5 días</option>
            <option value="10">10 días</option>
            <option selected="selected" value="15">15 días</option>
            <option value="20">20 días</option>
          </select>
        </td>
      </tr>
      <!-- CREO LA SELECCION DE LOS DIAS PARA FECHA TOPE DE NUEVO MANDATO -->
      <tr> 
        <td><label>Cant. de dias para fecha tope de nuevo mandato</label></td>
        <td><select name="estat[diasTopeNuevoMandato]">
            <option value="5">5 días</option>
            <option value="10">10 días</option>
            <option selected="selected" value="15">15 días</option>
            <option value="20">20 días</option>
          </select>
        </td>
      </tr>                  
      <?php
         echo $form['estatuto_pdf']->renderRow();
         echo $form->renderHiddenFields(); 
      ?>
    </tbody>
  </table>
</form>
