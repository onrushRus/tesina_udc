<?php

/**
 * Persona filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePersonaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cuit_cuil' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'cuit_cuil' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('persona_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

  public function getFields()
  {
    return array(
      'cuit_cuil' => 'Text',
      'id'        => 'Number',
    );
  }
}
