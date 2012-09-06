<?php

/**
 * Persona form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class PersonaForm extends BasePersonaForm
{
  public function configure()
  {
    $this->embedRelation('Direccion');
  //  $this->embedRelation('PersonaJuridica');

  }
}
