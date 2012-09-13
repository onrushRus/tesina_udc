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
          <a class="brand" href="<?php echo url_for('principal/index');?>">Inicio</a>
          <div class="nav-collapse">
            <ul class="nav">
              <!-- Comienza el menu de Gestión de Entes (A-B-M) -->  
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Gestión Personal<b class="caret"></b>
                </a>
                <ul class="dropdown-menu">                                    
                  <li class="active"><a href="<?php echo url_for('personaFisica/index');?>">Usuarios</a></li>
                  <li class="active"><a href="<?php echo url_for('personaJuridica/index');?>">Entes</a></li>                  
                </ul>
              </li>
              <!-- Finaliza el menu de Gestión de Entes (A-B-M) -->
              <!-- Comienza el menu de Gestión de Actividades (A-B-M) -->  
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Gestión Datos Básicos <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">                  
                  <li class="active"><a href="<?php echo url_for('direccion/index');?>">ABM de Direccion</a></li>
                  <li class="active"><a href="<?php echo url_for('ejercicioEconomico/index');?>">ABM de Ejercicio Economico</a></li>
                  <li class="active"><a href="<?php echo url_for('estatuto/index');?>">ABM de Estatutos</a></li>
                  <li class="active"><a href="<?php echo url_for('aporte/index');?>">ABM de Aportes</a></li>
                  <li class="active"><a href="<?php echo url_for('personaComisionDirectiva/index');?>">ABM de Personas de Comision Directiva</a></li>
                </ul>
              </li>
              <!-- Finaliza el menu de Gestión de Actividades (A-B-M) -->              
            </ul>
          </div><!--/.nav-collapse -->                    
        </div>
      </div>
    </div>        
    <div class="container-fluid">
      <!-- llamo al div y form de login -->        
                <!--<div>  class="span2 offset1 pull-left"> -->
                    <?php include_partial("global/estado");?>
                <!-- </div>      -->
        <!-- termina el llamado al div y form de login -->     
      <hr>  
      <?php echo $sf_content ?>
            
      <!-- Muestro el mapa de google con la ubicacion deseada
      <div class="span3 offset1">
          <iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Rawson,+Chubut,+Argentina&amp;aq=0&amp;oq=rawson+chubut&amp;sll=34.416505,-90.776047&amp;sspn=20.851281,43.286133&amp;ie=UTF8&amp;hq=&amp;hnear=Rawson,+Chubut,+Argentina&amp;t=m&amp;ll=-43.299884,-65.099487&amp;spn=0.01874,0.025749&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Rawson,+Chubut,+Argentina&amp;aq=0&amp;oq=rawson+chubut&amp;sll=34.416505,-90.776047&amp;sspn=20.851281,43.286133&amp;ie=UTF8&amp;hq=&amp;hnear=Rawson,+Chubut,+Argentina&amp;t=m&amp;ll=-43.299884,-65.099487&amp;spn=0.01874,0.025749&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
      </div>   
       finalizo el mapa de google -->
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
