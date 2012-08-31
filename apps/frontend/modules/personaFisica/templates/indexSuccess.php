<h1>Personas Fisicas</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id persona fisica</th>
      <th>Persona</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Usuario</th>
      <th>Password</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($PersonaFisicas as $PersonaFisica): ?>
    <tr>
      <td><a href="<?php echo url_for('personaFisica/edit?id_persona_fisica='.$PersonaFisica->getIdPersonaFisica()) ?>"><?php echo $PersonaFisica->getIdPersonaFisica() ?></a></td>
      <td><?php echo $PersonaFisica->getPersonaId() ?></td>
      <td><?php echo $PersonaFisica->getNombre() ?></td>
      <td><?php echo $PersonaFisica->getApellido() ?></td>
      <td><?php echo $PersonaFisica->getUsuario() ?></td>
      <td><?php echo $PersonaFisica->getPassword() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('personaFisica/edit?id_persona_fisica='.$PersonaFisica->getIdPersonaFisica()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'personaFisica/delete?id_persona_fisica='.$PersonaFisica->getIdPersonaFisica(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Actividad?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('personaFisica/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!-- <a href="<?php //echo url_for('personaFisica/new') ?>">New</a> -->
