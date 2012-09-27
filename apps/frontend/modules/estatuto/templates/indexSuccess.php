<?php /*@var $Estatutos $Estatuto*/ ?>
<h1 class="alert alert-info"><?php echo $ente->getNombreFantasia() ?></h1>
<hr>
<h3 class="alert-heading">Estatuto</h3>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Duracion ejer. econ.</th>
      <th>Dias fecha tope Asamblea</th>
      <th>Dias fecha tope Convocatoria</th>
      <th>Dias fecha tope nuevo Mandato</th>
      <th>Estatuto PDF</th>
      <?php if($sf_user->isAuthenticated()):?>
      <th>Acciones</th>
      <?php endif;?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Estatutos as $Estatuto): ?>
    <tr>
      <td><?php echo $Estatuto->getDuracionEjercicioEconomico() ?></td>
      <td><?php echo $Estatuto->getDiasParaFechaTopeAsamblea() ?></td>
      <td><?php echo $Estatuto->getDiasParaFechaTopeConvocatoria() ?></td>
      <td><?php echo $Estatuto->getDiasParaFechaTopeNuevoMandato() ?></td>
      <!--<td><img src="<?php //echo image_path('../uploads/imagenes_personas_juridicas/'.$Imagenes->getNombreArchivo())?>" alt="imagen coop-mut" width="200px" heigth="200px"></td>-->
      <td><a class="btn btn-info" href="<?php echo url_for('estatuto/estatutoLectura?ente='.$Estatuto->getPersonaJuridicaId()) ?>"><i class="icon-search icon-white"></i>Ver</a></td>
      <?php if($sf_user->isAuthenticated()):?>
      <td>          
            <a class="btn btn-warning btn-mini" href="<?php echo url_for('estatuto/edit?id_estatuto='.$Estatuto->getIdEstatuto()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
            <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'estatuto/delete?id_estatuto='.$Estatuto->getIdEstatuto(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el estatuto?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
      <?php endif;?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('personaJuridica/index?ente='.$Estatuto->getPersonaJuridica()->getNombreFantasia()) ?>"><i class="icon-arrow-left icon-white"></i> Volver al Ente</a>

<!--
<?php //if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
    <a class="btn btn-info" href="<?php //echo url_for('estatuto/new?ente='.$Estatuto->getPersonaJuridicaId()) ?>"><i class="icon-plus-sign icon-white"></i>Agregar Estatuto</a>
<?php //endif;?>
-->