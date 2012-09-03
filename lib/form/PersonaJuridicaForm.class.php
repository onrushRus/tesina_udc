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
      $anios = range(1920,date('Y'));
      $this->widgetSchema['fecha_inicio_actividad']->setAttribute('class','span2');
      $this->widgetSchema['fecha_inicio_actividad']->setOption('years',
        array_combine($anios, $anios)
      );
  }
}
