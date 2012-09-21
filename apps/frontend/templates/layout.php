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
        <div class="span10">
            <?php echo image_tag('banner.png')?>
            <!-- <img src="<?php //echo image_path('banner.png')?>" alt="Fondo" width="50px" > -->
        </div>
        <div class="span2">
            <?php include_partial("global/estado");?>
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
                        <li>
                            <a href="#">Institucional<b class="caret"></b>
                            </a>
                        </li>
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
    <div class="container-fluid"><!-- comienza contenido general -->
      <!-- Comienza barra lateral izquierda -->  
      <div class="span2">
         <!-- Comienza menu lateral derecho --> 
         <table class="table table-hover">
           <tr><th>
               <h4>Links</h4>
           </th></tr>
           <?php if($sf_user->isAuthenticated()):?>
              <tr><td>               
               <a href="<?php echo url_for('personaFisica/index');?>"
                  >Buscar Usuario</a>
              </td></tr>
           <?php endif;?>
           <tr><td>               
               <a href="<?php echo url_for('personaJuridica/busquedaEnte');?>"
                  >Buscar Entes</a>
           </td></tr>
         </table>
         <!-- Fin menu lateral derecho -->
      </div>
      <!-- Fin barra lateral izquierda -->  
      <!-- Comienza contenido general derecho -->  
      <div class="span10 pull-right">
         <?php echo $sf_content ?>
      </div>
      <!-- Fin contenido general derecho -->  
    </div><!-- fin contenido general -->
    <hr><!-- Linea que separa el contenido del footer -->
    <div class="row-fluid">
      <footer class="offset4">
        <p>Universidad de Chubut - Tecnicatura en Desarrollo de Software<br>
        Gosaine, Javier - Fernández, Nicolás<br>
        &copy; Company 2012</p>
      </footer>
    </div>
    <!-- include base js files from plugin -->
    <?php include_partial('default/mpProjectPlugin_js_assets', array('load' => array('jquery', 'twitter_bootstrap'))); ?>
    <?php include_javascripts() ?>
  </body>
</html>
