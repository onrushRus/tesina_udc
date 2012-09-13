<?php if (!($sf_user->isAuthenticated())): ?>          
  <!--Comienza Div Login-->
  <div id="login">
      <fieldset>
        <form class="form-inline form-horizontal" action="<?php echo url_for("login/index");?>" method="post" id="login">
            <input type="text" class="input-small" placeholder="Usuario" name="user"></input>
            <input type="password" class="input-small" placeholder="Password" name="pass"></input>
            <input type="submit" class="btn-success" value="Ingresar"></input>
        </form>
      </fieldset>     
<?php else:?>                   
      <div <!-- class="well" style="font-size: small" -->><?php echo "<i> Hola <b>".$sf_user->getAttribute('user')."</b>, Bienvenido!</i></h3>"?>
      <br/><a href="<?php echo url_for('login/logout') ?>"><i class="icon-off"></i> Salir</a></div>       
<?php endif;?>
  </div>