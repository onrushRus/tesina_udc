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
      $anios = range(date('Y'),1920);
      $this->widgetSchema['fecha_inicio_actividad']->setAttribute('class','span2');      
      //$this->widgetSchema['fecha_inicio_actividad']->setOption(array('format' => 'd - m - Y'));
              //array('format'=>'%day% - %month% - %year%')
      $this->widgetSchema['fecha_inicio_actividad']->setOption('years',
        array_combine($anios, $anios)
      );
  }
}
