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
   //valores minimos de cada campo   
   $this->validatorSchema['actividad']->setOption("min_length",5);
   $this->validatorSchema['actividad']->setMessage('min_length',"El nombre de la actividd es muy corto!");
   //actividad no vacio      
   $this->validatorSchema['actividad']->setMessage('required',"El Nombre de la Actividad no puede estar vacío");
   
  }
}
