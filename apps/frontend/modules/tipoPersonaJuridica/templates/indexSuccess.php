<h1>Tipos de Personas Juridicas</h1>

<table class="table table-bordered">
  <thead style="background: #7FDDCA">
    <tr>
      <th>Id tipo persona juridica</th>
      <th>Tipo persona juridica</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($TipoPersonaJuridicas as $TipoPersonaJuridica): ?>
    <tr>
      <td><a href="<?php echo url_for('tipoPersonaJuridica/edit?id_tipo_persona_juridica='.$TipoPersonaJuridica->getIdTipoPersonaJuridica()) ?>"><?php echo $TipoPersonaJuridica->getIdTipoPersonaJuridica() ?></a></td>
      <td><?php echo $TipoPersonaJuridica->getTipoPersonaJuridica() ?></td>
      <td>          
          <a class="btn btn-warning btn-mini" href="<?php echo url_for('tipoPersonaJuridica/edit?id_tipo_persona_juridica='.$TipoPersonaJuridica->getIdTipoPersonaJuridica()) ?>"><i class="icon-pencil icon-white"></i>Modificar</a>
          <?php echo link_to('<i class="icon-trash icon-white"></i>Eliminar', 'tipoPersonaJuridica/delete?id_tipo_persona_juridica='.$TipoPersonaJuridica->getIdTipoPersonaJuridica(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar el Tipo de Persona Juridica?', 'class'=>"btn btn-danger btn-mini")) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo url_for('tipoPersonaJuridica/new') ?>"><i class="icon-fire icon-white"></i>Agregar</a>
<!--  <a class="btn btn-info" href="<?php //echo url_for('tipoPersonaJuridica/new') ?>">Nuevo Tipo de Persona Juridica</a>  -->
