<?php

/**
 * Localidad form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class LocalidadForm extends BaseLocalidadForm
{
  public function configure()
  {
    $this->validatorSchema['nombre_localidad']->setOption("min_length",4);
    $this->validatorSchema['nombre_localidad']->setMessage('min_length',"La Localidad '%value%' es muy corta (minimo %min_length% caracteres).");
    $this->validatorSchema['nombre_localidad']->setOption("max_length",20);
    $this->validatorSchema['nombre_localidad']->setMessage('max_length',"La Localidad '%value%' es muy larga (maximo %max_length% caracteres).");
    $this->validatorSchema['nombre_localidad']->setMessage('required',"El nombre de la Localidad no puede estar vacío.");
    $this->validatorSchema['nombre_localidad']->setMessage('invalid',"La Localidad debe tener un Nombre Válido.");                         
      
  }
}
