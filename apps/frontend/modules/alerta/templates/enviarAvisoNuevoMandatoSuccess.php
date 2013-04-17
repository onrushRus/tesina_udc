<h1 class="alert alert-heading" align="center"> Enviar Aviso de Nuevo Mandato </h1>
<hr>
<?php if(empty($mensaje_error)):?>
    <h3 class="alert alert-success" align="center"><?php echo $mensaje;?></h3>
<?php else:?>
    <div class="alert alert-danger" align="center">
    <h2 ><?php echo $mensaje_error;?></h2><hr>
    <h4 ><?php echo $tipo_error;?></h4>
    </div>
<?php endif; ?>