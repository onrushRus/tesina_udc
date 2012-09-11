<h1>PersonaJuridicas List</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id persona juridica</th>
      <th>Situacion</th>
      <th>Tipo pers juridica</th>
      <th>Cuit cuil</th>
      <th>Nombre fantasia</th>
      <th>Fecha inicio actividad</th>
      <th>Resenia</th>
      <th>Legajo</th>
      <th>Matricula</th>
      <th>Cantidad de socios</th>
      <th>Telefono</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($PersonaJuridicas as $PersonaJuridica): ?>
    <tr>
      <td><a href="<?php echo url_for('personaJuridica/edit?id_persona_juridica='.$PersonaJuridica->getIdPersonaJuridica()) ?>"><?php echo $PersonaJuridica->getIdPersonaJuridica() ?></a></td>
      <td><?php echo $PersonaJuridica->getSituacionId() ?></td>
      <td><?php echo $PersonaJuridica->getTipoPersJuridicaId() ?></td>
      <td><?php echo $PersonaJuridica->getCuitCuil() ?></td>
      <td><?php echo $PersonaJuridica->getNombreFantasia() ?></td>
      <td><?php echo $PersonaJuridica->getFechaInicioActividad() ?></td>
      <td><?php echo $PersonaJuridica->getResenia() ?></td>
      <td><?php echo $PersonaJuridica->getLegajo() ?></td>
      <td><?php echo $PersonaJuridica->getMatricula() ?></td>
      <td><?php echo $PersonaJuridica->getCantidadDeSocios() ?></td>
      <td><?php echo $PersonaJuridica->getTelefono() ?></td>
      <td><?php echo $PersonaJuridica->getEmail() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('personaJuridica/new') ?>">New</a>
