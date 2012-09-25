<?php foreach ($EstatutoLectura as $Estatuto): ?>
    <embed src="<?php echo image_path('../uploads/estatutos_personas_juridicas/'.$Estatuto->getEstatutoPdf())?>" width="900" height="500"></embed>
<?php endforeach; ?>

<a class="btn btn-success" href="<?php echo url_for('personaJuridica/index?ente='.$Estatuto->getPersonaJuridica()->getNombreFantasia()) ?>"><i class="icon-arrow-left icon-white"></i> Volver al Ente</a>
<?php if($sf_user->isAuthenticated()):?>
    <a class="btn btn-info" href="<?php echo url_for('estatuto/index?ente='.$Estatuto->getPersonaJuridicaId()) ?>"><i class="icon-fire icon-white"></i>Volver al Estatuto</a>
<?php endif;?>