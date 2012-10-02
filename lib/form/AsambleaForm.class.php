<?php

/**
 * Asamblea form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class AsambleaForm extends BaseAsambleaForm
{
  public function configure(){
    //capturo el año del ejercicio economico, para ver el rango de fechas
    $user = sfContext::getInstance()->getUser();
    $anioEjEcon = $user->getAttribute('anio');  
    //echo $anio;
      
    //'fecha_de_asamblea'
    $anios = range(date("Y"),$anioEjEcon+1);
    $this->widgetSchema['fecha_de_asamblea']->setAttribute('class','span2');
    $this->widgetSchema['fecha_de_asamblea']->setOption('years',
         array_combine($anios, $anios)
    );  
    //'fecha_de_convocatoria'
    $anios = range(date("Y"),$anioEjEcon+1);
    $this->widgetSchema['fecha_de_convocatoria']->setAttribute('class','span2');
    $this->widgetSchema['fecha_de_convocatoria']->setOption('years',
         array_combine($anios, $anios)
    );
    //'fecha_de_nuevo_mandato'
    $anios = range(date("Y"),$anioEjEcon+1);
    $this->widgetSchema['fecha_de_nuevo_mandato']->setAttribute('class','span2');
    $this->widgetSchema['fecha_de_nuevo_mandato']->setOption('years',
         array_combine($anios, $anios)
    );  
    //Hago "Oculto" el campo 'ejercicio_economico_id"
    $this->validatorSchema['ejercicio_economico_id']->setOption('required',FALSE);
    $this->widgetSchema['ejercicio_economico_id'] = new sfWidgetFormInputHidden();      
  
    //hago un postValidator para verificar que las fechas
    //sean las correctas (convocatoria < asamblea) y (entrega mandato > asamblea)
    $this->validatorSchema->setPostValidator(
           new sfValidatorCallback(array(
               'callback' => array($this, 'checkFechas')
           )));
  }
  
  
  public function checkFechas($validator, $values){          
     $fechaConv = $values['fecha_de_convocatoria'];
     $fechaAsam = $values['fecha_de_asamblea'];
     $fechaNewMandato = $values['fecha_de_nuevo_mandato'];
      
     if($this->compararFechas($fechaConv,$fechaAsam)){
         $error = new sfValidatorError($validator,'La fecha de Convocatoria tiene que ser menor a la fecha de la asamblea');
         //lanzo el error asocociado al campo 'fecha_de_convocatoria'
         throw new sfValidatorErrorSchema($validator, array('fecha_de_convocatoria' => $error));
     }elseif($this->compararFechas($fechaAsam,$fechaNewMandato)){
         $error = new sfValidatorError($validator,'La fecha del nuevo mandato tiene que ser mayor a la fecha de la asamblea');
         //lanzo el error asocociado al campo 'fecha_de_nuevo_mandato'
         throw new sfValidatorErrorSchema($validator, array('fecha_de_nuevo_mandato' => $error));
     }
     return $values;
  }    
  
  public function compararFechas($primera, $segunda){
    // funcion que compara 2 fechas y devuelve verdadero si
    //$primera es menor a $segunda, y falso sino

    $valoresPrimera = explode('-',$primera);    
    $valoresSegunda = explode('-',$segunda);
     
    $diaPrimera = $valoresPrimera[2];
    $mesPrimera = $valoresPrimera[1];
    $anioPrimera = $valoresPrimera[0];

    //echo "<br> 1: ".$diaPrimera." - ".$mesPrimera." - ".$anioPrimera;
    
    $diaSegunda = $valoresSegunda[2];
    $mesSegunda = $valoresSegunda[1];
    $anioSegunda = $valoresSegunda[0];
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
        return ($diasPrimeraJuliano >= $diasSegundaJuliano);
    }          
  }
  
}
