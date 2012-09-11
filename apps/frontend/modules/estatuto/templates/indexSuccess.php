<h1>Estatutos List</h1>

<table>
  <thead>
    <tr>
      <th>Id estatuto</th>
      <th>Persona juridica</th>
      <th>Fecha inicio ejercicio economico</th>
      <th>Fecha fin ejercicio economico</th>
      <th>Dias para asamblea</th>
      <th>Meses para fin ejercicio economico</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Estatutos as $Estatuto): ?>
    <tr>
      <td><a href="<?php echo url_for('estatuto/edit?id_estatuto='.$Estatuto->getIdEstatuto()) ?>"><?php echo $Estatuto->getIdEstatuto() ?></a></td>
      <td><?php echo $Estatuto->getPersonaJuridicaId() ?></td>
      <td><?php echo $Estatuto->getFechaInicioEjercicioEconomico() ?></td>
      <td><?php echo $Estatuto->getFechaFinEjercicioEconomico() ?></td>
      <td><?php echo $Estatuto->getDiasParaAsamblea() ?></td>
      <td><?php echo $Estatuto->getMesesParaFinEjercicioEconomico() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('estatuto/new') ?>">New</a>
