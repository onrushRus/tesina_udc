<h1 class="alert alert-info" align="center"><?php echo $ente->getNombreFantasia()?></h1>
<hr>
<?php if((sizeof($Aportes))>0):?>
    <h3 class="alert alert-heading" align="center">Lista de Aportes y proyectos</h3>

    <table class="table table-bordered">
    <thead style="background: #7FDDCA">
        <tr>            
        <th>Fecha</th>
        <th>Tipo</th>
        <th>Monto ($)</th>
        <th>Nro. de Expediente</th>
        <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
            <th>Acciones</th>
        <?php endif;?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($Aportes as $Aporte): ?>
        <tr>
        <!-- <td><a href="<?php //echo url_for('aporte/edit?id_aporte='.$Aporte->getIdAporte()) ?>"><?php //echo $Aporte->getIdAporte() ?></a></td> -->      
        <td><?php echo $Aporte->getFechaAporte('d-m-Y')?></td>
        <td><?php echo $Aporte->getTipoAporte()?></td>
        <td><?php echo $Aporte->getMontoAporte()?></td>
        <td><?php echo $Aporte->getNumeroExpediente()?></td>
        <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
        <td>          
            <a class="btn btn-warning btn-mini" href="<?php echo url_for('aporte/edit?id_aporte='.$Aporte->getIdAporte()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
            <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'aporte/delete?id_aporte='.$Aporte->getIdAporte(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el Aporte?', 'class'=>"btn btn-danger btn-mini")) ?>
        </td>
        <?php endif;?>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
    <hr>
    <a class="btn btn-success" href="<?php echo url_for('personaJuridica/index?ente='.$ente->getNombreFantasia()) ?>"><i class="icon-arrow-left icon-white"></i> Volver al Ente</a>
    <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
    <a class="btn btn-info" href="<?php echo url_for('aporte/new?enteId='.$ente->getIdPersonaJuridica()) ?>"><i class="icon-plus-sign icon-white"></i>Agregar Aporte</a>
    <?php endif;?>
<?php else:?>
   <h3 class="alert alert-danger" align="center"> Este ente no tiene ningún aporte cargado!</h3>
<?php endif;?>  
