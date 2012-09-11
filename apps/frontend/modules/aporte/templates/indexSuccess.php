<h1>Aportes List</h1>

<table>
  <thead>
    <tr>
      <th>Id aporte</th>
      <th>Persona juridica</th>
      <th>Fecha aporte</th>
      <th>Monto aporte</th>
      <th>Numero expediente</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Aportes as $Aporte): ?>
    <tr>
      <td><a href="<?php echo url_for('aporte/edit?id_aporte='.$Aporte->getIdAporte()) ?>"><?php echo $Aporte->getIdAporte() ?></a></td>
      <td><?php echo $Aporte->getPersonaJuridicaId() ?></td>
      <td><?php echo $Aporte->getFechaAporte() ?></td>
      <td><?php echo $Aporte->getMontoAporte() ?></td>
      <td><?php echo $Aporte->getNumeroExpediente() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('aporte/new') ?>">New</a>
