<?php

/**
 * ActividadPersJuridica filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseActividadPersJuridicaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('actividad_pers_juridica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ActividadPersJuridica';
  }

  public function getFields()
  {
    return array(
      'actividad_id'        => 'ForeignKey',
      'persona_juridica_id' => 'ForeignKey',
    );
  }
}
