<?php

/**
 * PersonaComisionDirectiva form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class PersonaComisionDirectivaForm extends BasePersonaComisionDirectivaForm
{
  public function configure()
 {        
   // cambio la validacion del campo Email de "String" a tipo "Email".
   $this->validatorSchema['email'] = 
           new sfValidatorAnd(array(
           $this->validatorSchema['email'],
           new sfValidatorEmail()
   ));
   $this->validatorSchema['ejercicio_economico_id']->setOption('required',FALSE);
   $this->widgetSchema['ejercicio_economico_id'] = new sfWidgetFormInputHidden();
   $this->validatorSchema['puesto_id']->setOption('required',FALSE);
   $this->widgetSchema['puesto_id'] = new sfWidgetFormInputHidden();      
   
  }
}
