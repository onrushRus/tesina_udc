<h1>PersonaComisionDirectivas List</h1>

<table>
  <thead>
    <tr>
      <th>Id persona comision directiva</th>
      <th>Nombre y apellido</th>
      <th>Telefono</th>
      <th>Email</th>
      <th>Puesto</th>
      <th>Ejercicio economico</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($PersonaComisionDirectivas as $PersonaComisionDirectiva): ?>
    <tr>
      <td><a href="<?php echo url_for('personaComisionDirectiva/edit?id_persona_comision_directiva='.$PersonaComisionDirectiva->getIdPersonaComisionDirectiva()) ?>"><?php echo $PersonaComisionDirectiva->getIdPersonaComisionDirectiva() ?></a></td>
      <td><?php echo $PersonaComisionDirectiva->getNombreYApellido() ?></td>
      <td><?php echo $PersonaComisionDirectiva->getTelefono() ?></td>
      <td><?php echo $PersonaComisionDirectiva->getEmail() ?></td>
      <td><?php echo $PersonaComisionDirectiva->getPuestoId() ?></td>
      <td><?php echo $PersonaComisionDirectiva->getEjercicioEconomicoId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('personaComisionDirectiva/new') ?>">New</a>
