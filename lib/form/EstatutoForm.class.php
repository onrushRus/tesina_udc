<?php

/**
 * Estatuto form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class EstatutoForm extends BaseEstatutoForm
{
  public function configure(){
    
     if($this->isNew()){
        //seteo que el campo "persona_juridica_id" no sea requerido
        $this->validatorSchema['persona_juridica_id']->setOption('required',FALSE);
        $this->widgetSchema['persona_juridica_id'] = new sfWidgetFormInputHidden();
     }else{
        unset($this['persona_juridica_id']); 
     } 
           
  }
}
