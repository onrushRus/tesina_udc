<h1>Ente:</h1><h1 class="alert-heading"><?php echo $ente->getNombreFantasia() ?></h1>

<h2>Lista de Aportes</h2>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
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
      <td><?php echo $Aporte->getFechaAporte('d-m-Y') ?></td>
      <td><?php echo $Aporte->getMontoAporte() ?></td>
      <td><?php echo $Aporte->getNumeroExpediente() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-info" href="<?php echo url_for('aporte/new?enteId='.$ente->getIdPersonaJuridica()) ?>"><i class="icon-fire icon-white"></i>Agregar Aporte</a>
<!-- <a href="<?php //echo url_for('aporte/new') ?>">New</a> -->
