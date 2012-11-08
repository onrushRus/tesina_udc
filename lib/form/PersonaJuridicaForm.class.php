<?php

/**
 * PersonaJuridica form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class PersonaJuridicaForm extends BasePersonaJuridicaForm
{
  public function configure(){   
   
   //para ver las opciones de la situcion del ente como "radios"
   $this->widgetSchema['situacion_id']->setOption('expanded',TRUE);
   $this->widgetSchema['situacion_id']->setOption('multiple',FALSE);
   //para ver las opciones del tipo de ente como "radios"
   $this->widgetSchema['tipo_pers_juridica_id']->setOption('expanded',TRUE);
   $this->widgetSchema['tipo_pers_juridica_id']->setOption('multiple',FALSE);
   
   // cambio la validacion del campo Email de "String" a tipo "Email".
   $this->validatorSchema['email'] = 
           new sfValidatorAnd(array(
           $this->validatorSchema['email'],
           new sfValidatorEmail()
   ));
   
   // 'fecha_inicio_actividad'
   $anios = range(date("Y"),1920);      
      $this->widgetSchema['fecha_inicio_actividad']->setAttribute('class','span2');
      $this->widgetSchema['fecha_inicio_actividad']->setOption('years',
        array_combine($anios, $anios)
   );   
   //seteamos el formato de la fecha
   $this->widgetSchema['fecha_inicio_actividad']->setOption('format', '%day%/%month%/%year%');
         
   //hago un postValidator para verificar que la fecha
   //de inicio de actividad ingresada no sea mayor que la fecha actual
   $this->validatorSchema->setPostValidator(
           new sfValidatorCallback(array(
               'callback' => array($this, 'checkFechaInicioActividad')
           )));
   
   //configuramos los mensajes de error
   $this->validatorSchema['nombre_fantasia']->setOption("min_length",4);
   $this->validatorSchema['nombre_fantasia']->setMessage('min_length',"El nombre de fantasia es muy corto (minimo %min_length% caracteres).");
   $this->validatorSchema['nombre_fantasia']->setOption("max_length",20);
   $this->validatorSchema['nombre_fantasia']->setMessage('max_length',"El nombre de fantasia es muy largo (maximo %max_length% caracteres).");
   $this->validatorSchema['nombre_fantasia']->setMessage('required',"El nombre de Fantasia no puede quedar vacío.");
   $this->validatorSchema['nombre_fantasia']->setMessage('invalid',"Debe tener un nombre válido.");
   $this->validatorSchema['cuit_cuil']->setMessage('required',"El CUIT/CUIL no puede quedar vacío.");
   $this->validatorSchema['cuit_cuil']->setMessage('invalid',"El CUIT/CUIL deben ser todos números.");
   $this->validatorSchema['fecha_inicio_actividad']->setMessage('required',"La fecha de inicio de actividad no puede quedar vacía.");
   $this->validatorSchema['fecha_inicio_actividad']->setMessage('invalid',"La fecha de inicio de actividad debe ser válida.");
   $this->validatorSchema['legajo']->setMessage('required',"El legajo no puede quedar vacío.");
   $this->validatorSchema['cantidad_de_socios']->setMessage('required',"Debe ingresar la cantidad de socios del ente.");
   $this->validatorSchema['cantidad_de_socios']->setMessage('invalid',"La cantidad de socios debe ser un número entero.");
   $this->validatorSchema['telefono']->setMessage('required',"Debe ingresar un telefono de contacto del ente.");
   $this->validatorSchema['telefono']->setOption("min_length",6);
   $this->validatorSchema['telefono']->setMessage('min_length',"El teléfono es muy corto (minimo %min_length% caracteres).");
   $this->validatorSchema['telefono']->setOption("max_length",20);
   $this->validatorSchema['telefono']->setMessage('max_length',"El teléfono es muy largo (maximo %max_length% caracteres).");
   $this->validatorSchema['email']->setMessage('required','Debe ingresar un e-mail de contacto del ente.');
   $this->validatorSchema['email']->setMessage('invalid','Debe ingresar un e-mail válido ("nombre@host.com").');   
   
   
   // controlo las opciones que puede ver el usuario segun su tipo
   /*$user = sfContext::getInstance()->getUser();
   if ($user->hasCredential('2')){
      if(!($this->isNew())){
         unset($this['dni']);
         unset($this['usuario']);
         unset($this['password']);         
      }
      unset($this['tipo_socio_id']);
      unset($this['activo']);         
   } */                  
  }
  
  public function checkFechaInicioActividad($validator, $values){     
     $hoy = date('d-m-Y');
          
     if($this->compararFechas($values['fecha_inicio_actividad'],$hoy)){
         $error = new sfValidatorError($validator,'Fecha de Inicio de Actividad mayor a fecha Actual');         
         //lanzo el error asocociado al campo 'fecha_inicio_actividad'
         throw new sfValidatorErrorSchema($validator, array('fecha_inicio_actividad' => $error));
     }     
     return $values;
  }
  
  public function compararFechas($primera, $segunda){
    // funcion que compara 2 fechas y devuelve verdadero si
    //$primera es menor a $segunda, y falso sino
    
  if(($primera!=NULL)&&($segunda!=NULL)){
      
    $valoresPrimera = explode('-',$primera);    
    $valoresSegunda = explode('-',$segunda);
     
    $diaPrimera = $valoresPrimera[2];
    $mesPrimera = $valoresPrimera[1];
    $anioPrimera = $valoresPrimera[0];

    //echo "1: ".$diaPrimera." - ".$mesPrimera." - ".$anioPrimera;
    
    $diaSegunda = $valoresSegunda[0];
    $mesSegunda = $valoresSegunda[1];
    $anioSegunda = $valoresSegunda[2];
    //echo "<br> 2: ".$diaSegunda." - ".$mesSegunda." - ".$anioSegunda;
    
    $diasPrimeraJuliano = gregoriantojd($mesPrimera, $diaPrimera, $anioPrimera);
    $diasSegundaJuliano = gregoriantojd($mesSegunda, $diaSegunda, $anioSegunda);
    //echo "<br>diasJuliano1: ".$diasPrimeraJuliano;
    //echo "<br>diasJuliano2: ".$diasSegundaJuliano;
        
    if(!checkdate($mesPrimera, $diaPrimera, $anioPrimera)){
        //echo "La primer fecha no es válida!!";
        return 0;      
    }elseif(!checkdate($mesSegunda, $diaSegunda, $anioSegunda)){
        //echo "La Segunda fecha no es válida!!";
        return 0;   
    }else{
        return ($diasPrimeraJuliano > $diasSegundaJuliano);
    }          
  
    
  //cierra el if de primera y segunda vacios
   }
  
  
  }
  
}
