<?php

/**
 * PersonaFisica form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class PersonaFisicaForm extends BasePersonaFisicaForm
{
  public function configure()
  {
   //seteo que el campo "usuario" no sea requerido
   $this->validatorSchema['usuario']->setOption('required',FALSE);   
      
   //para ver las opciones del tipo de usuario como "radios"
   $this->widgetSchema['tipo_usuario_id']->setOption('expanded',TRUE);
   $this->widgetSchema['tipo_usuario_id']->setOption('multiple',FALSE);
   
   // cambio el widget dle password junto con su validator
   $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
   $this->validatorSchema['password'] = new sfValidatorPass();
   
   //$this->widgetSchema['password']->setDefault('password','sdfsdfs');
  }
}
