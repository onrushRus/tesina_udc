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
            
      
   if($this->isNew()){
     //para ver las opciones del tipo de usuario como "radios"
     $this->widgetSchema['tipo_usuario_id']->setOption('expanded',TRUE);
     $this->widgetSchema['tipo_usuario_id']->setOption('multiple',FALSE);
     
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
     // cambio el widget del password junto con su validator
     $this->widgetSchema['password'] = new sfWidgetFormInputText();
     //$this->validatorSchema['password'] = new sfValidatorPass();
     $this->widgetSchema['password']->setAttribute('type','password');
     $this->validatorSchema['password']->setMessage('required',"El password no puede estar vacío!");
   }
   //configuro mensajes para el "nombre"
   $this->validatorSchema['nombre']->setOption('min_length',2);
   $this->validatorSchema['nombre']->setMessage('min_length','El nombre debe tener como mínimo %min_length% caracteres.');
   $this->validatorSchema['nombre']->setOption('max_length',30);
   $this->validatorSchema['nombre']->setMessage('max_length','El nombre debe tener como máximo %max_length% caracteres.');
   $this->validatorSchema['nombre']->setMessage('required','Ingrese el nombre del usuario.');
   //configuro mensajes para el "apellido"
   $this->validatorSchema['apellido']->setOption('min_length',2);
   $this->validatorSchema['apellido']->setMessage('min_length','El apellido debe tener como mínimo %min_length% caracteres.');
   $this->validatorSchema['apellido']->setOption('max_length',30);
   $this->validatorSchema['apellido']->setMessage('max_length','El apellido debe tener como máximo %max_length% caracteres.');
   $this->validatorSchema['apellido']->setMessage('required','Ingrese el apellido del usuario.');   
   
   if($this->isNew()){
   //configuro mensajes para el "Usuario"
   $this->validatorSchema['usuario']->setOption('min_length',4);
   $this->validatorSchema['usuario']->setMessage('min_length','El "Usuario" debe tener como mínimo %min_length% caracteres.');
   $this->validatorSchema['usuario']->setOption('max_length',20);
   $this->validatorSchema['usuario']->setMessage('max_length','El "Usuario" debe tener como máximo %max_length% caracteres.');
   $this->validatorSchema['usuario']->setMessage('required','Ingrese el "Usuario" del usuario.');   
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
