<?php /* @var $Ente PersonaJuridica */ ?>

<?php //if(!$var_post):?>
<div class="alert alert-info">
<h1 class="alert-info" align="center">Busqueda de Entidades</h1>

<fieldset>
    <form class="well form-search span5 offset2" action="<?php echo url_for('personaJuridica/busquedaEnte') ?>" method="POST">
       <label>Nombre Completo:</label>
       <input class="search-query" type="text" data-provide="typeahead" data-items="15" placeholder="Nombre Completo del Ente" name="ente"
       data-source='[<?php foreach($entes as $ente){echo "\"".$ente->getNombreFantasia()."\"";if($entes->getPosition()< sizeof($entes)-1){echo(",");}}?>]'>
       <hr>
       <label>Nombre Parcial:</label>
       <input class="search-query" type="text" placeholder="Nombre o letras Parciales" name="parteNombre">
       <hr>
       <label>Localidad:</label>
       <input class="search-query" type="text" data-provide="typeahead" data-items="15" placeholder="Localidad" name="localidad"
       data-source='[<?php foreach($localidades as $loc){echo "\"".$loc->getNombreLocalidad()."\"";if($localidades->getPosition()< sizeof($localidades)-1){echo(",");}}?>]'>
       <hr>
       <label>Tipo:</label>
       <input type="radio" name="tipoEnte" value="0" checked>Todas 
       <input type="radio" name="tipoEnte" value="1" >Solo Cooperatvas 
       <input type="radio" name="tipoEnte" value="2" >Solo Mutuales        
       <hr>       
       <button type="submit" class="btn btn-toolbar">Buscar</button>
       <button type="reset" class="btn btn-toolbar">Limpiar</button>
    </form>
</fieldset>
</div>
<hr>
<?php //else:?>
    <?php if(sizeof($ListaEntes)==0):?>
      <div class="alert alert-danger" align="center">
        <img src="<?php echo image_path('logo_exclamacion.png')?>" alt="Fondo" width="100px" >
        <h2>No se encontro ningún resultado!</h2>
      </div>
    <?php else: ?>
    <h2 class="alert alert-success" align="center">Resultado de la busqueda</h2>    
    <table class="table table-bordered">
        <thead style="background: #7FDDCA">
            <th>Tipo Ente</th>
            <th>Localidad</th>
            <th>Nombre de Fantasia</th>
            <th>Actividad / Objeto Social</th>
            <th>Teléfono</th>
            <th>E-mail</th>
            <th>Más Información</th>
        </thead>
        <tbody>
            <?php foreach($ListaEntes as $Ente):?>
            <tr>
                <td><?php if($Ente->getTipoPersJuridicaId() == 1){
                    echo "Cooperativa";}else{echo "Mutual";}?></td>
                <td>
                  <?php foreach ($Ente->getDireccionsJoinLocalidad() as $temp):
                            if ($temp->getTipoDireccionId() == 1){                                
                               echo $temp->getLocalidad()->getNombreLocalidad();
                            }else{
                               echo "<h6 class='alert-danger'>Sin Dirección</h6>";
                            }
                         endforeach;
                  ?></td>
                <td><?php echo $Ente->getNombreFantasia();?></td>
                <td><?php foreach ($Ente->getActividadPersJuridicasJoinActividad() as $temp):                            
                               echo $temp->getActividad()->getActividad();
                         endforeach;                
                ;?></td>
                <td><?php echo $Ente->getTelefono();?></td>
                <td><?php echo $Ente->getEmail();?></td>
                <td>
                    <a class="btn btn-success btn-mini" href="<?php echo url_for('personaJuridica/index?ente='.$Ente->getNombreFantasia()) ?>"><i class="icon-search icon-white"></i>Ver</a>
                    <?php echo link_to(' VERRR ', '@ente_segun_nombre?ente='.$Ente->getNombreFantasia(), array('method' => 'POST' )) ?>
                    <?php //echo link_to('<i class="icon-trash icon-white"></i>Modificar', 'personaJuridica/index?ente='.$Ente->getNombreFantasia(), array('method' => 'POST', 'class'=>"btn btn-warning btn-mini")) ?>
                    <!-- <a href="<?php //echo url_for('personaJuridica/index?ente='.$Ente->getNombreFantasia())?>">
                    <button class="btn btn-warning">Ir</button></a> -->
                </td>
            </tr>                
            <?php endforeach;?>
        </tbody>
    </table>
    <?php //endif; ?>
<?php endif;?>
<?php if(sizeof($ListaEntes)>0):?>
<?php echo $ListaEntes->getNbResults()." elementos encontrados. Mostrando resultados desde ".$ListaEntes->getFirstIndice()." hasta ".$ListaEntes->getLastIndice()."<br>";?>
<?php if ($ListaEntes->haveToPaginate()):?>
        <?php //echo link_to('&laquo;','personaJuridica/busquedaEnte?pag='.$ListaEntes->getFirstPage())?>
        <?php echo link_to("<i class='icon icon-backward'></i>",'personaJuridica/busquedaEnte?pag='.$ListaEntes->getFirstPage())?>
        <?php //echo link_to('&lt;','personaJuridica/busquedaEnte?&pag='.$ListaEntes->getPreviousPage())?>
        <?php echo link_to("<i class='icon-chevron-left'></i>",'personaJuridica/busquedaEnte?&pag='.$ListaEntes->getPreviousPage())?>
        <?php $links = $ListaEntes->getLinks();
            foreach ($links as $page): ?>
                <strong><?php echo ($page == $ListaEntes->getPage()) ? $page : link_to($page, 'personaJuridica/busquedaEnte?pag='.$page) ?></strong>
                <strong><?php if ($page != $ListaEntes->getCurrentMaxLink()): ?> / <?php endif ?></strong>
        <?php endforeach ?>
        <?php echo link_to("<i class='icon-chevron-right'></i>",'personaJuridica/busquedaEnte?pag='.$ListaEntes->getNextPage()) ?>
        <?php echo link_to("<i class='icon icon-forward'></i>",'personaJuridica/busquedaEnte?pag='.$ListaEntes->getLastPage()) ?>
<?php endif ?>
<?php endif ?>