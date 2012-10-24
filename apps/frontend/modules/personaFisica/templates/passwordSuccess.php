<h1 class="alert-heading">Modificar contraseña del Usuario " 
    <?php echo $sf_user->getAttribute('user')?>"
</h1>

<form name="cambio_contrasenia" action="<?php echo url_for('personaFisica/password') ?>" method="POST">
  <table class="table table-bordered">
    <tfoot style="background: #7FDDCA">    
            <tr>
                <td colspan="2">
                    &nbsp; <input class="btn btn-info" type="submit" value="Guardar">
                </td>
            </tr>
    </tfoot>
    <tbody>
            <?php echo $formulario?>
    </tbody>
       
  </table>
</form>


