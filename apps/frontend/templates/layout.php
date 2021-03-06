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
    <div class="row-fluid">
      <div>
        <div class="span10">
            <div class="offset3">
            <?php //echo image_tag('banner2.jpg')?>
            <img src="<?php echo image_path('banner2.png')?>" alt="Fondo" width="450px">
            </div>
        </div>
        <div class="span2">
            <?php include_partial("global/estado");?>
        </div>
      </div>    
    </div>    
    <div class="row-fluid">      
       <!-- sample navbar -->
       <div class="container-fluid">        
          <div class="navbar">
             <div class="navbar-inner">
                 <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php echo url_for('principal/index');?>">Inicio</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                        <!-- Comienza el menu de Gestión de Entes (A-B-M) -->  
                        <!--<li>
                            <a href="#">Institucional<!-<b class="caret"></b>--
                            </a>
                        </li> -->
                        
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Gestión Personal<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                            <li class="active"><a href="<?php //echo url_for('personaJuridica/busquedaEnte');?>">Entes</a></li>
                            <?php //if($sf_user->isAuthenticated()):?>
                                <li class="active"><a href="<?php //echo url_for('personaFisica/index');?>">Usuarios</a></li>
                            <?php //endif;?>
                            </ul>
                        </li> -->
                        <!-- Finaliza el menu de Gestión de Entes (A-B-M) -->                                     
                        </ul>
                    </div><!--/.nav-collapse -->                    
                 </div>
             </div>                            
          </div>
       </div>
    </div>
      
    <!-- comienza contenido general -->
    <div class="container-fluid">
      <!-- Comienza menu lateral izquierdo -->   
      <div class="span2">
        <div class="nav-collapse">
           <ul class="nav">
            <table class="table table-bordered">
              <thead style="background: #7FDDCA">
                <tr>
                  <th>Opciones!</th>
                </tr>
              </thead>
              <tbody> 
                  <!--Comienza acordeon de Entes-->
                  <tr><td>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <strong>Entidades</strong><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo url_for('personaJuridica/busquedaEnte');?>">
                          <i class="icon-search"></i> Buscar Entidades</a></li>
                          <?php if (($sf_user->isAuthenticated()) && ($sf_user->hasCredential('1')||($sf_user->hasCredential('2')))):?>
                            <li><a href="<?php echo url_for('personaJuridica/new');?>">
                            <i class="icon-plus-sign"></i> Nueva Entidad</a></li>
                          <?php endif;?>
                        </ul>
                      </li>
                  </td></tr>
                      <!--Finaliza acordeon de Entes-->
                      <!--Comienza acordeon de Usuarios-->  
                  <?php if (($sf_user->isAuthenticated()) && ($sf_user->hasCredential('1'))):?>
                   <tr><td>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <strong>Usuarios</strong><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo url_for('personaFisica/index');?>">
                          <i class="icon-search"></i> Buscar Usuario</a></li>
                          <li><a href="<?php echo url_for('personaFisica/new');?>">
                          <i class="icon-plus-sign"></i> Nuevo Usuario</a></li>
                        </ul>
                      </li>
                   </td></tr>
                      <!--Finaliza acordeon de Usuarios-->     
                      <!--Comienza acordeon de Opciones Básicas -->         
                   <tr><td>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <strong>Opc. Básicas</strong><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo url_for('actividad/index');?>">
                          <i class="icon-edit"></i> Actividades</a></li>
                          <li><a href="<?php echo url_for('localidad/index');?>">
                          <i class="icon-edit"></i> Localidades</a></li>
                          <li><a href="<?php echo url_for('provincia/index');?>">
                          <i class="icon-edit"></i> Provincias</a></li>
                        </ul>
                      </li>
                   </td></tr>
                      <!--Finaliza acordeon de Opciones Básicas --> 
                  <?php endif;?>         
                  <?php if (($sf_user->isAuthenticated()) && !($sf_user->hasCredential('2'))):?>
                      <!--Comienza acordeon de Alertas -->
                   <tr><td>
                      <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <strong>Alertas</strong><b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo url_for('alerta/vencimientoEjercicioEconomico');?>">
                          <i class="icon-exclamation-sign"></i> Por cierre de Ej. Económico</a></li>
                          <li><a href="<?php echo url_for('alerta/vencimientoLlamadoAsamblea');?>">
                          <i class="icon-exclamation-sign"></i> Por Convocatoria a Asamblea</a></li>
                          <li><a href="<?php echo url_for('alerta/vencimientoNuevoMandato');?>">
                          <i class="icon-exclamation-sign"></i> Por Renovación de Autoridades</a></li>
                      </ul>
                      </li>
                   </td></tr>
                      <!--Finaliza acordeon de Alertas --> 
                  <?php endif;?> 
                  <?php if (($sf_user->isAuthenticated()) && ($sf_user->hasCredential('1'))):?>
                      <!--Comienza acordeon de Mensajes de Alerta-->         
                   <tr><td>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <strong>Modif. Alertas</strong><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo url_for('mailAlerta/index');?>">
                          <i class="icon-pencil"></i> Mensajes de Alerta</a></li>
                        </ul>
                      </li>
                   </td></tr>
                      <!--Finaliza acordeon de Mensajes de Alerta-->   
                  <?php endif;?>
                </tbody>
              </table>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    
      <!-- Fin menu lateral izquierdo -->

      
      <!-- Comienza contenido general derecho -->  
      <div class="span10 pull-right">
         <?php echo $sf_content ?>
      </div>
      <!-- Fin contenido general derecho -->  
    </div><!-- fin contenido general -->
    <hr> 
    <div class="row-fluid">
      <!-- sample navbar -->
      <div class="container-fluid">        
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container-fluid">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>              
              <div class="nav-collapse offset3">
                <ul class="nav">
                  <li> 
                    <a><p align="center"><font size="3">
                       Universidad de Chubut - Tecnicatura en Desarrollo de Software<br>
                       Gosaine, Javier - Fernández, Nicolás
                        </font></p>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>  
      <!--<footer class="offset4">
        <p>Universidad de Chubut - Tecnicatura en Desarrollo de Software<br>
        Gosaine, Javier - Fernández, Nicolás<br>
        &copy; Company 2012</p>
      </footer>-->
    </div>
    <!-- include base js files from plugin -->
    <?php include_partial('default/mpProjectPlugin_js_assets', array('load' => array('jquery', 'twitter_bootstrap'))); ?>
    <?php include_javascripts() ?>
  </body>
</html>
