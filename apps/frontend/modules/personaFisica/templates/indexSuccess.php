<?php //este form sólo es visible por el administrador y si éste lo hace desde la busqueda de usuario
   if (($sf_user->isAuthenticated()) && ($sf_user->hasCredential(array('1'),false)) && (!$tiene_parametro_usuario)):?>
    <h2 class="alert-heading offset2">Busqueda de Usuarios</h2>
    <fieldset>    
        <form class="well form-search span3 offset2" action="<?php echo url_for('personaFisica/index') ?>" method="POST">
           <input type="text" data-provide="typeahead" data-items="5" placeholder="Usuario" name="usuario"
           data-source='[<?php foreach($PersonaFisicas as $pers){echo "\"".$pers->getUsuario()."\"";if($PersonaFisicas->getPosition()< sizeof($PersonaFisicas)-1){echo(",");}}?>]'>

           <button type="submit" class="btn btn-toolbar">Buscar</button>
           <button type="reset" class="btn btn-toolbar">Limpiar</button>
        </form>
    </fieldset>
    <br>
<?php endif;?>
<?php
  //se le notifica al usuario si la contraseña es modificada
  if ($pass_modificada):?>
      <div class="alert alert-success">La contraseña se modifico correctamente</div>
  <?endif;?>
  <?php if ($var_post):?>
    <!-- Si vino algo por POST, me fijo si encontro un usuario -->
    <?php 
    $cant = sizeof($elegido);
    if($cant > 0):?>
        <!-- Si encontró un usuario, muestro sus datos -->
        <table class="table table-bordered">
        <thead style="background: #7FDDCA">
            <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>      
            <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($elegido as $PersonaFisica): ?>
            <tr>
            <td><?php echo $PersonaFisica->getNombre() ?></td>
            <td><?php echo $PersonaFisica->getApellido() ?></td>
            <td><?php echo $PersonaFisica->getUsuario() ?></td>      
            <td>          
                <a class="btn btn-warning btn-mini" href="<?php echo url_for('personaFisica/edit?id_persona_fisica='.$PersonaFisica->getIdPersonaFisica()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
                <?php if($sf_user->isAuthenticated() && $sf_user->hasCredential('1')):
                    echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'personaFisica/delete?id_persona_fisica='.$PersonaFisica->getIdPersonaFisica(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el usuario?', 'class'=>"btn btn-danger btn-mini"));
                        endif
                ?>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>  
    <?php else:?> 
        <img class="offset3" src="<?php echo image_path('logo_exclamacion.png')?>" alt="Error" width="100px" >
        <h2 class="offset1">No se encontro ningún resultado!</h2>
    <?php endif;?>
 <?php endif;?>
    <br>
    
    