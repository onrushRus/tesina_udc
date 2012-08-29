<h1>Personas Juridicas</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Persona</th>
      <th>Situacion</th>
      <th>Tipo pers juridica</th>
      <th>Nombre fantasia</th>
      <th>Fecha inicio actividad</th>
      <th>Resenia</th>
      <th>Legajo</th>
      <th>Matricula</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($PersonaJuridicas as $PersonaJuridica): ?>
    <tr>
      <td><a href="<?php echo url_for('personaJuridica/edit?persona_id='.$PersonaJuridica->getPersonaId()) ?>"><?php echo $PersonaJuridica->getPersonaId() ?></a></td>
      <td><?php echo $PersonaJuridica->getSituacionId() ?></td>
      <td><?php echo $PersonaJuridica->getTipoPersJuridicaId() ?></td>
      <td><?php echo $PersonaJuridica->getNombreFantasia() ?></td>
      <td><?php echo $PersonaJuridica->getFechaInicioActividad() ?></td>
      <td><?php echo $PersonaJuridica->getResenia() ?></td>
      <td><?php echo $PersonaJuridica->getLegajo() ?></td>
      <td><?php echo $PersonaJuridica->getMatricula() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('personaJuridica/edit?persona_id='.$PersonaJuridica->getPersonaId()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'personaJuridica/delete?persona_id='.$PersonaJuridica->getPersonaId(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar la Persona Juridica?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('personaJuridica/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!--  <a class="btn btn-info" href="<?php //echo url_for('personaJuridica/new') ?>">Nueva Persona Juridica</a>  -->
