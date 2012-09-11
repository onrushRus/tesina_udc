<?php

/**
 * EjercicioEconomico form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class EjercicioEconomicoForm extends BaseEjercicioEconomicoForm
{
  public function configure()
  {
   // Agrego embebido el formulario de las personas de la comision directiva
   $this->embedRelation('PersonaComisionDirectiva');
   
   // Agrego embebido el formulario de la asamblea
   $this->embedRelation('Asamblea');
  }
}
