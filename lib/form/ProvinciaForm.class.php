<?php

/**
 * Provincia form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class ProvinciaForm extends BaseProvinciaForm
{
  public function configure()
  {
   $this->validatorSchema['nombre_provincia']->setOption("min_length",4);
   $this->validatorSchema['nombre_provincia']->setMessage('min_length',"El nombre de la provincia es muy corto (minimo %min_length% caracteres).");
   $this->validatorSchema['nombre_provincia']->setOption("max_length",20);
   $this->validatorSchema['nombre_provincia']->setMessage('max_length',"El nombre de la provincia es muy largo (maximo %max_length% caracteres).");
   $this->validatorSchema['nombre_provincia']->setMessage('required',"El nombre de la provincia no puede quedar vacío.");
   $this->validatorSchema['nombre_provincia']->setMessage('invalid',"Debe tener un nombre válido.");     
    
  }
}
