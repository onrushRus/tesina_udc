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
      
   $this->widgetSchema['id_persona_comision_directiva'] = new sfWidgetFormInputText();     
   
  }
}
