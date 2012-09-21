<?php /* @var $Ente PersonaJuridica */ ?>

<?php if(!$var_post):?>
<h1 class="alert-heading offset2">Busqueda de Entes</h1>

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
<br>
<?php else:?>
    <?php if(sizeof($ListaEntes)==0):?>
        <img class="offset3" src="<?php echo image_path('logo_exclamacion.png')?>" alt="Fondo" width="100px" >
        <h2 class="offset1">No se encontro ningún resultado!</h2>
    <?php else: ?>
    <h2 class="alert-heading">Resultado de la busqueda</h2>    
    <table class="table table-bordered">
        <thead style="background: #7FDDCA">
            <th>Tipo Ente</th>
            <th>Localidad</th>
            <th>Nombre de Fantasia</th>            
            <th>Acciones</th>
        </thead>
        <tbody>
            <?php foreach($ListaEntes as $Ente):?>
            <tr>
                <td><?php if($Ente->getTipoPersJuridicaId() == 1){
                    echo "Cooperativa";}else{echo "Mutual";}?></td>
                <td><?php echo $Ente->getDireccionsJoinLocalidad()?></td>
                <td><?php echo $Ente->getNombreFantasia();?></td>                
                <td>
                    <a class="btn btn-success btn-mini" href="<?php echo url_for('personaJuridica/index?ente='.$Ente->getNombreFantasia()) ?>"><i class="icon-search icon-white"></i>Ver</a> 
                    <?php //echo link_to('<i class="icon-trash icon-white"></i>Modificar', 'personaJuridica/index?ente='.$Ente->getNombreFantasia(), array('method' => 'POST', 'class'=>"btn btn-warning btn-mini")) ?>
                    <!-- <a href="<?php //echo url_for('personaJuridica/index?ente='.$Ente->getNombreFantasia())?>">
                    <button class="btn btn-warning">Ir</button></a> -->
                </td>
            </tr>                
            <?php endforeach;?>
        </tbody>
    </table>
    <?php endif; ?>
<?php endif;?>
