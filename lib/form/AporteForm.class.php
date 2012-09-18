<?php

/**
 * Aporte form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class AporteForm extends BaseAporteForm
{
  public function configure(){
     //hago hidden el campo 'persona_juridica_id'
     $this->validatorSchema['persona_juridica_id']->setOption('required',FALSE);
     $this->widgetSchema['persona_juridica_id'] = new sfWidgetFormInputHidden(); 
      
     //'fecha_aporte'
     $anios = range(date("Y"),1920);
     $this->widgetSchema['fecha_aporte']->setAttribute('class','span2');
     $this->widgetSchema['fecha_aporte']->setOption('years',
          array_combine($anios, $anios)
     ); 
  }
}
