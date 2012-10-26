<h1 class="alert-heading">Modificar contraseña del Usuario " 
    <?php $usuario = $sf_user->getAttribute('user'); echo $usuario?>
</h1>

<form name="cambio_contrasenia" action="<?php echo url_for('personaFisica/password?usuario='.$usuario) ?>" method="post">
  <table class="table table-bordered">
    <tfoot style="background: #7FDDCA">    
            <tr>
                <td>
                    &nbsp;<a class="btn btn-success" href="<?php echo url_for("personaFisica/index?usuario=".$usuario)?>"><i class="icon-arrow-left icon-white"></i> Volver</a>
                </td>
                <td>
                    &nbsp;<input class="btn btn-info" type="submit" value="Guardar">
                </td>
            </tr>
    </tfoot>
    <tbody>
            <?php echo $formulario?>
    </tbody>   
  </table>
</form>


