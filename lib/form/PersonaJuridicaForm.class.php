<?php

/**
 * PersonaJuridica form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class PersonaJuridicaForm extends BasePersonaJuridicaForm
{
  public function configure()
  {
   // Agrego embebido el formulario de la direccion, ya sea postal o real
   $this->embedRelation('Direccion');         
  }
}
