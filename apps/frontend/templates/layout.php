<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>

    <!-- more metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">

    <!-- include base css files from plugin -->
    <?php include_partial('default/mpProjectPlugin_css_assets', array('load' => array('twitter_bootstrap'))); ?>

    <?php include_stylesheets() ?>
  </head>
  <body>
  <!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
    <!-- sample navbar -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
            <a class="brand" href="<?php echo url_for('principal/index');?>">SAyES</a>
          <div class="nav-collapse">
            <ul class="nav">
              <!-- Comienza el menu de Gestión de Entes (A-B-M) -->  
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Gestión Personal<b class="caret"></b>
                </a>
                <ul class="dropdown-menu">                  
                  <li class="active"><a href="<?php echo url_for('persona/index');?>">ABM de Persona</a></li>
                  <li class="active"><a href="<?php echo url_for('personaFisica/index');?>">ABM de Usuario</a></li>
                  <li class="active"><a href="<?php echo url_for('personaJuridica/index');?>">ABM de Entes</a></li>
                </ul>
              </li>
              <!-- Finaliza el menu de Gestión de Entes (A-B-M) -->
              <!-- Comienza el menu de Gestión de Actividades (A-B-M) -->  
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Gestión Datos Básicos <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">                  
                  <li class="active"><a href="<?php echo url_for('actividad/index');?>">ABM de Actividades</a></li>
                  <li class="active"><a href="<?php echo url_for('actividadPersJuridica/index');?>">ABM de Actividad-Pers. Juridicas</a></li>
                  <li class="active"><a href="<?php echo url_for('direccion/index');?>">ABM de Direccion</a></li>
                  <li class="active"><a href="<?php echo url_for('ejercicioEconomico/index');?>">ABM de Ejercicio Economico</a></li>
                  <li class="active"><a href="<?php echo url_for('estadoPersona/index');?>">ABM de Estado de Persona</a></li>
                  <li class="active"><a href="<?php echo url_for('localidad/index');?>">ABM de Localidades</a></li>
                  <li class="active"><a href="<?php echo url_for('provincia/index');?>">ABM de Provincia</a></li>
                  <li class="active"><a href="<?php echo url_for('situacionPersonaJuridica/index');?>">ABM de Situacion de Persona Juridica</a></li>
                  <li class="active"><a href="<?php echo url_for('tipoPersonaJuridica/index');?>">ABM de Tipo de Persona Juridica</a></li>
                  
                </ul>
              </li>
              <!-- Finaliza el menu de Gestión de Actividades (A-B-M) -->              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container-fluid">      
      <?php echo $sf_content ?>
      <hr>
      <footer>
        <p>Universidad de Chubut - Tecnicatura en Desarrollo de Software</p>
        <p>Gosaine, Javier - Fernández, Nicolás</p>        
        <p>&copy; Company 2012</p>
      </footer>
    </div> <!-- /container -->
    <!-- include base js files from plugin -->
    <?php include_partial('default/mpProjectPlugin_js_assets', array('load' => array('jquery', 'twitter_bootstrap'))); ?>
    <?php include_javascripts() ?>
  </body>
</html>
