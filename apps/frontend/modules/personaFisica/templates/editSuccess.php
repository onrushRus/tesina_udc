<h1 class="alert-heading">Modificar datos del Usuario " 
    <?php echo $sf_user->getAttribute('user')?>"
</h1>

<?php foreach ($persona_edit as $pfe): ?>
    <table class="table table-bordered"> 
        <tfoot style="background: #7FDDCA">    
            <tr>
                <td colspan="2">
                    &nbsp;<a class="btn btn-success" href="/tesina_udc/frontend_dev.php/personaFisica?usuario=<?php echo $pfe->getUsuario()?>"><i class="icon-arrow-left icon-white"></i> Volver</a>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <th><label for="persona_fisica_nombre">Nombre</label></th>
                <td><input disabled="disabled" type="text" name="persona_fisica[nombre]" value="<?php echo $pfe->getNombre()?>" id="persona_fisica_nombre"></td>
            </tr>
            <tr>
                <th><label for="persona_fisica_apellido">Apellido</label></th>
                <td><input disabled="disabled" type="text" name="persona_fisica[apellido]" value="<?php echo $pfe->getApellido()?>" id="persona_fisica_apellido"></td>
            </tr>
            <tr>
                <th><label for="persona_fisica_password">Password</label></th>
                <td>
                    <!-- <input type="password" name="persona_fisica[password]" value="e159232f5b92d0a43356a55b227df1b5" id="persona_fisica_password"> -->
                    <a class="btn btn-inverse" href="/tesina_udc/frontend_dev.php/personaFisica/password?id_persona_fisica=<?php echo $pfe->getIdPersonaFisica()?>">Cambiar Password</a>
                    <input type="hidden" name="persona_fisica[id_persona_fisica]" value="<?php echo $pfe->getIdPersonaFisica()?>" id="persona_fisica_id_persona_fisica">
                    <input type="hidden" name="persona_fisica[_csrf_token]" value="2ac63b46d8c0a7c427f977607d3fe534" id="persona_fisica__csrf_token">
                </td>
            </tr>
        <input type="hidden" name="persona_fisica[id_persona_fisica]" value="<?php echo $pfe->getIdPersonaFisica()?>" id="persona_fisica_id_persona_fisica">
        <input type="hidden" name="persona_fisica[_csrf_token]" value="2ac63b46d8c0a7c427f977607d3fe534" id="persona_fisica__csrf_token">
        </tbody>
    </table>
 <?php endforeach; ?>

