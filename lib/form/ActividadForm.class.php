<?php

/**
 * Actividad form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class ActividadForm extends BaseActividadForm
{
  public function configure()
  {
     unset($this['actividad_pers_juridica_list']);
  
     //seteo las validaciones necesarias     
     $this->validatorSchema['actividad']->setOption("min_length",4);
     $this->validatorSchema['actividad']->setMessage('min_length',"La Actividad '%value%' es muy corta (minimo %min_length% caracteres).");
     $this->validatorSchema['actividad']->setOption("max_length",20);
     $this->validatorSchema['actividad']->setMessage('max_length',"La Actividad '%value%' es muy larga (maximo %max_length% caracteres).");
     $this->validatorSchema['actividad']->setMessage('required',"La Actividad no puede estar vacía.");
     $this->validatorSchema['actividad']->setMessage('invalid',"Debe tener un Nombre Válido.");         
  }
}
