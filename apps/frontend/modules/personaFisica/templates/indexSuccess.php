<h1>PersonaFisicas List</h1>

<table>
  <thead>
    <tr>
      <th>Id persona fisica</th>
      <th>Tipo usuario</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Usuario</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($PersonaFisicas as $PersonaFisica): ?>
    <tr>
      <td><a href="<?php echo url_for('personaFisica/edit?id_persona_fisica='.$PersonaFisica->getIdPersonaFisica()) ?>"><?php echo $PersonaFisica->getIdPersonaFisica() ?></a></td>
      <td><?php echo $PersonaFisica->getTipoUsuarioId() ?></td>
      <td><?php echo $PersonaFisica->getNombre() ?></td>
      <td><?php echo $PersonaFisica->getApellido() ?></td>
      <td><?php echo $PersonaFisica->getUsuario() ?></td>
      <td><?php echo $PersonaFisica->getPassword() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('personaFisica/new') ?>">New</a>
