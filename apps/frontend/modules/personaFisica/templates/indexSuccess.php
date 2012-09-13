<h1 class="alert-heading">Busqueda de Usuarios</h1>

<fieldset>
    <form class="well form-search" action="<?php echo url_for('personaFisica/index') ?>" method="POST">
       <input type="text" data-provide="typeahead" data-items="5" placeholder="Usuario" name="usuario"
       data-source='[<?php foreach($PersonaFisicas as $pers){echo "\"".$pers->getUsuario()."\"";if($PersonaFisicas->getPosition()< sizeof($PersonaFisicas)-1){echo(",");}}?>]'>
       <button type="submit" class="btn-success">Buscar</button>
       <button type="reset" class="btn-warning">Borrar</button>
    </form>
</fieldset>
<br>

<?php 
    $cant = sizeof($elegido);
    if($cant >= 1):?>
<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <!-- <th>Id persona fisica</th> 
      <th>Tipo usuario</th>  -->
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Usuario</th>
      <th>Password</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($elegido as $PersonaFisica): ?>
    <tr>
      <!-- <td><a href="<?php //echo url_for('personaFisica/edit?id_persona_fisica='.$PersonaFisica->getIdPersonaFisica()) ?>"><?php echo $PersonaFisica->getIdPersonaFisica() ?></a></td>
      <td><?php //echo $PersonaFisica->getTipoUsuarioId() ?></td> -->
      <td><?php echo $PersonaFisica->getNombre() ?></td>
      <td><?php echo $PersonaFisica->getApellido() ?></td>
      <td><?php echo $PersonaFisica->getUsuario() ?></td>
      <td><?php echo $PersonaFisica->getPassword() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('personaFisica/edit?id_persona_fisica='.$PersonaFisica->getIdPersonaFisica()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'personaFisica/delete?id_persona_fisica='.$PersonaFisica->getIdPersonaFisica(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el usuario?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php endif;?>
<br>
<a class="btn btn-success" href="<?php echo url_for('personaFisica/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!--  <a href="<?php //echo url_for('personaFisica/new') ?>">New</a> -->
