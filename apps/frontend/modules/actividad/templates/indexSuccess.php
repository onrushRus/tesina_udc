<h1 class="alert alert-heading" align="center">Lista de actividades</h1>
<hr>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Actividad</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Actividads as $Actividad): ?>
    <tr>
      <td><?php echo $Actividad->getActividad() ?></td>
      <td>
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('actividad/edit?id_actividad='.$Actividad->getIdActividad()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'actividad/delete?id_actividad='.$Actividad->getIdActividad(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Actividad?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php if(sizeof($Actividads)>0):?>
<?php echo $Actividads->getNbResults()." elementos encontrados. Mostrando resultados desde ".$Actividads->getFirstIndice()." hasta ".$Actividads->getLastIndice()."<br>";?>
<?php if ($Actividads->haveToPaginate()):?>
        <?php //echo link_to('&laquo;','personaJuridica/busquedaEnte?pag='.$ListaEntes->getFirstPage())?>
        <?php echo link_to("<i class='icon icon-backward'></i>",'actividad/index?pag='.$Actividads->getFirstPage())?>
        <?php //echo link_to('&lt;','personaJuridica/busquedaEnte?&pag='.$ListaEntes->getPreviousPage())?>
        <?php echo link_to("<i class='icon-chevron-left'></i>",'actividad/index?&pag='.$Actividads->getPreviousPage())?>
        <?php $links = $Actividads->getLinks();
            foreach ($links as $page): ?>
                <strong><?php echo ($page == $Actividads->getPage()) ? $page : link_to($page, 'actividad/index?pag='.$page) ?></strong>
                <strong><?php if ($page != $Actividads->getCurrentMaxLink()): ?> / <?php endif ?></strong>
        <?php endforeach ?>
        <?php echo link_to("<i class='icon-chevron-right'></i>",'actividad/index?pag='.$Actividads->getNextPage()) ?>
        <?php echo link_to("<i class='icon icon-forward'></i>",'actividad/index?pag='.$Actividads->getLastPage()) ?>
<?php endif ?>
<?php endif ?>
<hr>
<a class="btn btn-info" href="<?php echo url_for('actividad/new') ?>"><i class="icon-plus-sign icon-white"></i> Agregar Actividad</a>
