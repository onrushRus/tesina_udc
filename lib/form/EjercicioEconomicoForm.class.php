<?php

/**
 * EjercicioEconomico form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class EjercicioEconomicoForm extends BaseEjercicioEconomicoForm
{
  public function configure()
  {     
   // 'fecha_fin_ejercicio_economico'
   $anios = range(date("Y"),1920);
      $this->widgetSchema['fecha_fin_ejercicio_economico']->setAttribute('class','span2');
      $this->widgetSchema['fecha_fin_ejercicio_economico']->setOption('years',
        array_combine($anios, $anios)
   );             
      
   if($this->isNew()){
     //seteo que el campo "persona_juridica_id" no sea requerido
     $this->validatorSchema['persona_juridica_id']->setOption('required',FALSE);
     $this->widgetSchema['persona_juridica_id'] = new sfWidgetFormInputHidden();
   }else{
     unset($this['persona_juridica_id']); 
   }    
      
  }
}
