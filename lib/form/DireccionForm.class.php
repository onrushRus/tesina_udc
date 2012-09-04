<?php

/**
 * Direccion form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class DireccionForm extends BaseDireccionForm
{
  public function configure()
  {
   //valores minimos de cada campo   
   $this->validatorSchema['calle']->setOption("min_length",10);
   $this->validatorSchema['calle']->setMessage('min_length',"El nombre de la calle es muy corto!");      
   //nombre de calle no vacio
   $this->validatorSchema['calle']->setMessage('required',"El nombre de la calle no puede estar vacío");
   //numero de calle no vacio
   $this->validatorSchema['numero']->setMessage('required',"El número de la calle no puede estar vacío");
  }
}
