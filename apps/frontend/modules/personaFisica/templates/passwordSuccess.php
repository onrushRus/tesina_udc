<h1 class="alert-heading">Modificar contraseña del Usuario " 
    <?php echo $sf_user->getAttribute('user')?>"
</h1>

<?php /*foreach($persona_edit as $pers):
    echo $pers->getNombre();
endforeach;*/?>

    <table class="table table-bordered"> 
        <tfoot style="background: #7FDDCA">    
            <tr>
                <td colspan="2">
                    &nbsp; <input class="btn btn-info" type="submit" value="Guardar">
                </td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <th><label for="persona_fisica_nombre">Ingrese contraseña actual</label></th>
                <td><input type="text" name="persona_fisica[password_viejo]" value="" id="persona_fisica_nombre"></td>
            </tr>
            <tr>
                <th><label for="persona_fisica_apellido">Ingrese nueva contraseña</label></th>
                <td><input type="text" name="persona_fisica[password_nuevo1]" value="" id="persona_fisica_apellido"></td>
            </tr>
            <tr>
                <th><label for="persona_fisica_apellido">Confirma nueva contraseña</label></th>
                <td><input type="text" name="persona_fisica[password_nuevo2]" value="" id="persona_fisica_apellido"></td>
            </tr>
            <input type="hidden" name="persona_fisica[id_persona_fisica]" value="" id="persona_fisica_id_persona_fisica">
            <input type="hidden" name="persona_fisica[_csrf_token]" value="2ac63b46d8c0a7c427f977607d3fe534" id="persona_fisica__csrf_token">
        </tbody>
    </table>
