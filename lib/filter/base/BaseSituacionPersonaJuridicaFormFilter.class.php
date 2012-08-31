<?php

/**
 * SituacionPersonaJuridica filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseSituacionPersonaJuridicaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'situacion'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'situacion'                  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('situacion_persona_juridica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SituacionPersonaJuridica';
  }

  public function getFields()
  {
    return array(
      'id_situacion_pers_juridica' => 'Number',
      'situacion'                  => 'Text',
    );
  }
}
