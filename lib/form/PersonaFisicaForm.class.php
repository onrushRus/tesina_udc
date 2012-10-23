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
   $this->validatorSchema['tipo_usuario_id']->setOption('required',FALSE);   
         
   //seteo que el campo "tipo_usuario_id" este oculto
   //$this->widgetSchema['tipo_usuario_id'] = new sfWidgetFormInputHidden();
      
   if($this->isNew()){
     //para ver las opciones del tipo de usuario como "radios"
     $this->widgetSchema['tipo_usuario_id']->setOption('expanded',TRUE);
     $this->widgetSchema['tipo_usuario_id']->setOption('multiple',FALSE);
     //seteo que el campo "usuario" no sea requerido
     //$this->validatorSchema['usuario']->setOption('required',FALSE);   
     //$this->widgetSchema['usuario'] = new sfWidgetFormInputHidden();
     
     //seteo que el campo "password" no sea requerido
     $this->widgetSchema['password'] = new sfWidgetFormInputHidden();     
     $this->validatorSchema['password']->setOption('required',FALSE);      
   }else{
     $user = sfContext::getInstance()->getUser();
     if ($user->hasCredential('2') || $user->hasCredential('3')){
       //quito la opcion de modificar el "tipo de usuario"
       unset($this['tipo_usuario_id']);
       //quito la opcion de modificar el "usuario"
       unset($this['usuario']);
     }  
     //coloco el campo "usuario" como desactivado, para que se muestre pero no se modifique
     //$this->widgetSchema['usuario']->setAttributes(array('disabled' => 'disabled'));     
     
     // cambio el widget del password junto con su validator
     $this->widgetSchema['password'] = new sfWidgetFormInputText();
     //$this->validatorSchema['password'] = new sfValidatorPass();
     $this->widgetSchema['password']->setAttribute('type','password');
     $this->validatorSchema['password']->setMessage('required',"El password no puede estar vacío!");
   }     
   
  }
  
  
  public function updateObject($values = null){
     $objeto = parent::updateObject($values);     
          
     if($this->getObject()->isNew()){         
         //$objeto->setApellido($objeto->getApellido());
         //$objeto->setUsuario(substr(strtolower($objeto->getNombre()),0,1)
         //.substr(strtolower($objeto->getApellido()),0,4));                  
         $objeto->setPassword($objeto->getUsuario());
         
     }     
     return $objeto;
  }    
  
}
